<?php

namespace PragmaGoTech\Interview\Handler\Interfaces;

interface InterpolatorInterface
{
    public function interpolate(float $value, array $lowerBound, array $upperBound): float;
}