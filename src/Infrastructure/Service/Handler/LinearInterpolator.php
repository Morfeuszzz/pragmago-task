<?php

namespace PragmaGoTech\Interview\Infrastructure\Service\Handler;

final class LinearInterpolator implements Interpolator
{
    public function interpolate(float $value, array $lowerBound, array $upperBound): float
    {
        [$x0, $y0] = $lowerBound;
        [$x1, $y1] = $upperBound;

        if ($x0 === $x1) {
            return $y0;
        }

        return $y0 + (($y1 - $y0) / ($x1 - $x0)) * ($value - $x0);
    }
}
