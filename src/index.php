<?php

namespace PragmaGoTech\Interview;

use PragmaGoTech\Interview\Domain\Model\LoanProposal;
use PragmaGoTech\Interview\Infrastructure\Service\Handler\FeeCalculator;
use PragmaGoTech\Interview\Infrastructure\Service\Handler\LinearInterpolator;

$linearInterpolator = new LinearInterpolator();
$calculator = new FeeCalculator($linearInterpolator);

$application = new LoanProposal(24, 2750);
$fee = $calculator->calculate($application);
// $fee = (float) 115.0