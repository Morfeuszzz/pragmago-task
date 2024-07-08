<?php

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler;

use PragmaGoTech\Interview\Domain\ValueObject\Fee;
use PragmaGoTech\Interview\Domain\ValueObject\Bound;
use PragmaGoTech\Interview\Domain\Model\LoanProposal;
use PragmaGoTech\Interview\Infrastructure\Service\Handler\Interfaces\InterpolatorInterface;
use PragmaGoTech\Interview\Infrastructure\Service\Handler\Interfaces\FeeCalculatorInterface;

final readonly class FeeCalculator implements FeeCalculatorInterface
{
    public function __construct(
        private InterpolatorInterface $interpolator
    ) {
    }

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