<?php

namespace App\Domain\ValueObjects;

use InvalidArgumentException;

final class Quantity
{
    private int $value;

    public function __construct(int $value)
    {
        if ($value <= 0) {
            throw new InvalidArgumentException(
                'La cantidad debe ser mayor que cero.'
            );
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}