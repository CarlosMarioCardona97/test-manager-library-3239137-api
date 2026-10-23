<?php

namespace App\Domain\ValueObjects;

use InvalidArgumentException;

final class Isbn
{
    private string $value;

    public function __construct(string $value)
    {
        if (strlen($value) !== 13 || !ctype_digit($value)) {
            throw new InvalidArgumentException('El ISBN debe tener 13 dígitos.');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}