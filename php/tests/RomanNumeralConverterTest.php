<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumeralConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /** @test */
    public function convert_1_to_I(): void
    {
        $xxx = new RomanNumeralConverter();

        $roman = $xxx->convertToRoman(1);

        self::assertEquals("I", $roman);
    }

    /** @test */
    public function convert_2_to_II(): void
    {
        $xxx = new RomanNumeralConverter();

        $roman = $xxx->convertToRoman(2);

        self::assertEquals("II", $roman);
    }

    /** @test */
    public function convert_3_to_III(): void
    {
        $xxx = new RomanNumeralConverter();

        $roman = $xxx->convertToRoman(3);

        self::assertEquals("III", $roman);
    }
}
