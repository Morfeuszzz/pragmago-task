<?php

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler\Interfaces;

interface InterpolatorInterface
{
    public function interpolate(float $value, array $lowerBound, array $upperBound): float;
}