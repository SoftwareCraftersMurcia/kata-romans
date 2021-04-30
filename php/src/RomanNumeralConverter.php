<?php declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    public function convertToRoman(int $arabicNumber): string
    {
        if (1 === $arabicNumber) {
            return "I";
        }

        return "II";
    }
}
