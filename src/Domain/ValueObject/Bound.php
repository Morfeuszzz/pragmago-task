<?php

namespace PragmaGoTech\Interview\Domain\ValueObject;

use PragmaGoTech\Interview\Infrastructure\Service\Provider\FeeBreakpoint;

final readonly class Bound
{
    /** @var array<int, int> [loanAmount, fee] */
    private array $breakpoints;

    public function __construct(
        int $term,
        private float $amount
    ) {
        $this->breakpoints = FeeBreakpoint::getBreakpoints($term);
    }

    /**
     * @return array<array<int, int>> [[loanAmount, fee]]
     */
    public function findBounds(): array
    {
        return [$this->findLowerBound(), $this->findUpperBound()];
    }

    /**
     * @return array<int, int> [loanAmount, fee]
     */
    private function findLowerBound(): array
    {
        /** @var int $breakpoint */
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
     * @return array<int, int> [loanAmount, fee]
     */
    private function findUpperBound(): array
    {
        /** @var int $breakpoint */
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
