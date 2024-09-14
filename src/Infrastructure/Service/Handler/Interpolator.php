<?php

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler;

interface Interpolator
{
    /**
     * @param int[] $lowerBound
     * @param int[] $upperBound
     */
    public function interpolate(float $value, array $lowerBound, array $upperBound): float;
}
