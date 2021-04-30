<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumeralConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /*+
     = TRANSFORMATIONS =
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

    /**
     * @dataProvider provider
     * @test
     */
    public function convert(int $number, string $symbol): void
    {
        $romanNumeralConverter = new RomanNumeralConverter();
        self::assertEquals($symbol, $romanNumeralConverter->convertToRoman($number));
    }

    public function provider(): \Generator
    {
        yield 'convert_1_to_I' => [
            $number = 1,
            $symbol = 'I'
        ];

        yield 'convert_2_to_II' => [
            $number = 2,
            $symbol = 'II'
        ];

        yield 'convert_3_to_III' => [
            $number = 3,
            $symbol = 'III'
        ];

        yield 'convert_4_to_IV' => [
            $number = 4,
            $symbol = 'IV'
        ];

        yield 'convert_5_to_V' => [
            $number = 5,
            $symbol = 'V'
        ];

        yield 'convert_6_to_VI' => [
            $number = 6,
            $symbol = 'VI'
        ];

        yield 'convert_7_to_VII' => [
            $number = 7,
            $symbol = 'VII'
        ];

        yield 'convert_8_to_VIII' => [
            $number = 8,
            $symbol = 'VIII'
        ];

        yield 'convert_9_to_IX' => [
            $number = 9,
            $symbol = 'IX'
        ];

        yield 'convert_10_to_X' => [
            $number = 10,
            $symbol = 'X'
        ];

        yield 'convert_15_to_XV' => [
            $number = 15,
            $symbol = 'XV'
        ];

        yield 'convert_20_to_XX' => [
            $number = 20,
            $symbol = 'XX'
        ];
    }
}
