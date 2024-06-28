<?php

use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Handler\FeeCalculator;

$calculator = new FeeCalculator();

$application = new LoanProposal(24, 2750);
$fee = $calculator->calculate($application);
// $fee = (float) 115.0