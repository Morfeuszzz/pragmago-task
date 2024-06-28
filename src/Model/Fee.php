<?php

namespace PragmaGoTech\Interview\Model;

final class Fee
{
    private float $fee;

    private float $amount;

    public function __construct(float $fee, float $amount)
    {
        $this->fee = $fee;
        $this->amount = $amount;
    }

    public function roundUp(): self
    {
        $total = $this->fee + $this->amount;
        $remainder = $total % 5;

        if ($remainder !== 0) {
            $roundedUp = $this->fee + 5 - $remainder;

            return new Fee($roundedUp, $this->amount);
        }

        return $this;
    }

    public function asFloat(): float
    {
        return $this->fee;
    }
}