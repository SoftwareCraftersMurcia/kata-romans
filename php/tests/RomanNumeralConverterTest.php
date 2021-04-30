<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumeralConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /*+
     = TRANSFORMATIONS:

     1  = I
     2  = II
     3  = III
     4  = IV
     5  = V
     6  = VI
     7  = VII
     8  = VIII
     9  = IX
     10 = X
     */

    /** @test */
    public function convert_1_to_I(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(1);

        self::assertEquals("I", $roman);
    }

    /** @test */
    public function convert_2_to_II(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(2);

        self::assertEquals("II", $roman);
    }

    /** @test */
    public function convert_3_to_III(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(3);

        self::assertEquals("III", $roman);
    }

    /** @test */
    public function convert_4_to_IV(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(4);

        self::assertEquals("IV", $roman);
    }

    /** @test */
    public function convert_5_to_V(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(5);

        self::assertEquals("V", $roman);
    }

    /** @test */
    public function convert_6_to_VI(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(6);

        self::assertEquals("VI", $roman);
    }

    /** @test */
    public function convert_7_to_VII(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(7);

        self::assertEquals("VII", $roman);
    }

    /** @test */
    public function convert_8_to_VIII(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(8);

        self::assertEquals("VIII", $roman);
    }

    /** @test */
    public function convert_9_to_IX(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(9);

        self::assertEquals("IX", $roman);
    }

    /** @test */
    public function convert_10_to_X(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(10);

        self::assertEquals("X", $roman);
    }

    /** @test */
    public function convert_15_to_XV(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(15);

        self::assertEquals("XV", $roman);
    }

    /** @test */
    public function convert_20_to_XX(): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();

        $roman = $romanNumeralConverter->convertToRoman(20);

        self::assertEquals("XX", $roman);
    }
}
