<?php

namespace PragmaGoTech\Interview\Handler;

use PragmaGoTech\Interview\Model\Fee;
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

        $fee = new Fee($term, $amount);

        return $fee->roundUp()->asFloat();
    }
}