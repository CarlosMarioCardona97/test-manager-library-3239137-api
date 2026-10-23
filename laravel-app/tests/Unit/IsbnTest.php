<?php

namespace Tests\Unit;

use App\Domain\ValueObjects\Isbn;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class IsbnTest extends TestCase
{
    public function test_it_accepts_an_isbn_with_thirteen_digits(): void
    {
        $isbn = new Isbn('9780307474728');

        $this->assertSame('9780307474728', $isbn->value());
    }

    public function test_it_rejects_an_isbn_with_an_invalid_length(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Isbn('123');
    }
}