<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler\Interfaces;

use PragmaGoTech\Interview\Domain\Model\LoanProposal;

interface FeeCalculatorInterface
{
    /**
     * @return float The calculated total fee.
     */
    public function calculate(LoanProposal $application): float;
}
