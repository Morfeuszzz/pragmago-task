<?php

namespace PragmaGoTech\Interview\Handler;

use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Handler\Interfaces\FeeCalculatorInterface;

final class FeeCalculator implements FeeCalculatorInterface
{
    public function calculate(LoanProposal $application): float
    {
        $term = $application->term();
        $amount = $application->amount();

        return $amount;
    }
}