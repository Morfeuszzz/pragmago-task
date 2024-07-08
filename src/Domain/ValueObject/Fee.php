<?php

namespace PragmaGoTech\Interview\Domain\ValueObject;

final readonly class Fee
{
    public function __construct(
        private float $fee,
        private float $amount
    ) {
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