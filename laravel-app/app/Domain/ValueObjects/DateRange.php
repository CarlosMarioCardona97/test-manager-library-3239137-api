<?php

namespace App\Domain\ValueObjects;

use DateTimeImmutable;
use InvalidArgumentException;

final class DateRange
{
    public function __construct(
        private DateTimeImmutable $start,
        private DateTimeImmutable $end
    ) {
        if ($end < $start) {
            throw new InvalidArgumentException(
                'La fecha final no puede ser anterior a la fecha inicial.'
            );
        }
    }

    public function start(): DateTimeImmutable
    {
        return $this->start;
    }

    public function end(): DateTimeImmutable
    {
        return $this->end;
    }
}