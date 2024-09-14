<?php

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler;

use PragmaGoTech\Interview\Domain\ValueObject\Fee;
use PragmaGoTech\Interview\Domain\ValueObject\Bound;
use PragmaGoTech\Interview\Domain\Model\LoanProposal;

final readonly class FeeCalculator implements Calculator
{
    public function __construct(
        private Interpolator $interpolator,
    ) {}

    public function calculate(LoanProposal $application): float
    {
        $term = $application->term();
        $amount = $application->amount();

        $bound = new Bound($term, $amount);
        [$lowerBound, $upperBound] = $bound->findBounds();

        $interpolatedValue = $this->interpolator->interpolate($amount, $lowerBound, $upperBound);
        $fee = new Fee($interpolatedValue, $amount);

        return $fee->roundUp()->asFloat();
    }
}
