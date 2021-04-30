<?php declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    public function convertToRoman(int $arabicNumber): string
    {
        if (1 === $arabicNumber) {
            return "I";
        }

        if (2 == $arabicNumber) {
            return "II";
        }

        if (3 === $arabicNumber) {
            return 'III';
        }

        return '';
    }
}
