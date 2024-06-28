<?php

namespace PragmaGoTech\Interview;

use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Handler\FeeCalculator;
use PragmaGoTech\Interview\Handler\LinearInterpolator;

$linearInterpolator = new LinearInterpolator();
$calculator = new FeeCalculator($linearInterpolator);

$application = new LoanProposal(24, 2750);
$fee = $calculator->calculate($application);
// $fee = (float) 115.0