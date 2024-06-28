<?php

namespace PragmaGoTech\Interview\Model;

use PragmaGoTech\Interview\Provider\FeeBreakpoint;

final readonly class Bound
{
    private array $breakpoints;

    public function __construct(
        int $term,
        private float $amount
    ) {
        $this->breakpoints = FeeBreakpoint::getBreakpoints($term);
    }

    public function findBounds(): array
    {
        return [$this->findLowerBound(), $this->findUpperBound()];
    }

    /**
     * @return array [int, int] - [loanAmount, fee]
     */
    private function findLowerBound(): array
    {
        $breakpoint = \array_key_first($this->breakpoints);
        $lowerBound = [$breakpoint, $this->breakpoints[$breakpoint]];

        foreach ($this->breakpoints as $loanAmount => $fee) {
            if ($loanAmount > $this->amount) {
                break;
            }

            $lowerBound = [$loanAmount, $fee];
        }

        return $lowerBound;
    }

    /**
     * @return array [int, int] - [loanAmount, fee]
     */
    private function findUpperBound(): array
    {
        $breakpoint = \array_key_last($this->breakpoints);
        $upperBound = [$breakpoint, $this->breakpoints[$breakpoint]];

        foreach ($this->breakpoints as $loanAmount => $fee) {
            if ($loanAmount >= $this->amount) {
                return [$loanAmount, $fee];
            }
        }

        return $upperBound;
    }
}