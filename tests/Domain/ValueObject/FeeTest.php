<?php

namespace tests\Domain\ValueObject;

use PHPUnit\Framework\TestCase;
use PragmaGoTech\Interview\Domain\ValueObject\Fee;

final class FeeTest extends TestCase
{
    private Fee $fee;

    public function testFeeValueObjectConstruct(): void
    {
        $fee = new Fee(5, 11);

        $this->assertInstanceOf(Fee::class, $fee);
    }

    public function testAsFloat(): void
    {
        $this->assertSame(5.0, $this->fee->asFloat());
    }

    public function testRoundUpReturnFeeValueObject(): void
    {
        $this->assertInstanceOf(Fee::class, $this->fee->roundUp());
    }

    public function testRoundUpCorrectly(): void
    {
        $roundedUpFee = $this->fee->roundUp();

        $this->assertSame(9.0, $roundedUpFee->asFloat());
    }

    protected function setUp(): void
    {
        $this->fee = new Fee(5, 11);
    }
}
