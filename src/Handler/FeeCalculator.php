<?php

namespace PragmaGoTech\Interview\Handler;

use PragmaGoTech\Interview\Model\Fee;
use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Handler\Interfaces\FeeCalculatorInterface;

final class FeeCalculator implements FeeCalculatorInterface
{
    public function calculate(LoanProposal $application): float
    {
        $term = $application->term();
        $amount = $application->amount();

        $fee = new Fee($term, $amount);

        return $fee->roundUp()->asFloat();
    }
}