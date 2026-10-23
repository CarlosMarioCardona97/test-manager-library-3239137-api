<?php

namespace Tests\Unit;

use App\Domain\ValueObjects\DateRange;
use DateTimeImmutable;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DateRangeTest extends TestCase
{
    public function test_it_accepts_equal_dates(): void
    {
        $date = new DateTimeImmutable('2026-10-22');

        $range = new DateRange($date, $date);

        $this->assertSame($date, $range->start());
        $this->assertSame($date, $range->end());
    }

    public function test_it_rejects_an_end_date_before_the_start_date(): void
    {
        $start = new DateTimeImmutable('2026-10-23');
        $end = new DateTimeImmutable('2026-10-22');

        $this->expectException(InvalidArgumentException::class);

        new DateRange($start, $end);
    }
}