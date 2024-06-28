<?php

namespace PragmaGoTech\Interview\Handler;

use PragmaGoTech\Interview\Model\Fee;
use PragmaGoTech\Interview\Model\Bound;
use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Handler\Interfaces\InterpolatorInterface;
use PragmaGoTech\Interview\Handler\Interfaces\FeeCalculatorInterface;

final class FeeCalculator implements FeeCalculatorInterface
{
    private InterpolatorInterface $interpolator;

    public function __construct(InterpolatorInterface $interpolator)
    {
        $this->interpolator = $interpolator;
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