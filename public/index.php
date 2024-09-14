<?php

use PragmaGoTech\Interview\Domain\Model\LoanProposal;
use PragmaGoTech\Interview\Infrastructure\Service\Handler\FeeCalculator;
use PragmaGoTech\Interview\Infrastructure\Service\Handler\LinearInterpolator;

require_once __DIR__ . '/../vendor/autoload.php';

$linearInterpolator = new LinearInterpolator();
$calculator = new FeeCalculator($linearInterpolator);

$application = new LoanProposal(24, 2750);
$fee = $calculator->calculate($application);
// $fee = (float) 115.0

echo 'The fee is ' . $fee;
