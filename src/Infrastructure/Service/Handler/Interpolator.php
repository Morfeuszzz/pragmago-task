<?php

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler;

interface Interpolator
{
    public function interpolate(float $value, array $lowerBound, array $upperBound): float;
}
