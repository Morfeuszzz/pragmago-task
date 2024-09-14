<?php

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler;

use PragmaGoTech\Interview\Domain\Model\LoanProposal;

interface Calculator
{
    /**
     * @return float The calculated total fee.
     */
    public function calculate(LoanProposal $application): float;
}
