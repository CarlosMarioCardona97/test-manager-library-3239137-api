<?php

namespace Tests\Unit;

use App\Domain\ValueObjects\Quantity;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class QuantityTest extends TestCase
{
    public function test_it_accepts_a_positive_quantity(): void
    {
        $quantity = new Quantity(1);

        $this->assertSame(1, $quantity->value());
    }

    public function test_it_rejects_zero_quantity(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Quantity(0);
    }
}