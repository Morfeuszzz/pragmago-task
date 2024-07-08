<?php

namespace PragmaGoTech\Interview\Handler;

use PragmaGoTech\Interview\Model\Bound;
use PragmaGoTech\Interview\ValueObject\Fee;
use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Handler\Interfaces\InterpolatorInterface;
use PragmaGoTech\Interview\Handler\Interfaces\FeeCalculatorInterface;

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