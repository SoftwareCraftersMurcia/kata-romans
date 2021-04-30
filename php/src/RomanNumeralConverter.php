<?php
declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    public function convertToRoman(int $arabicNumber): string
    {
        $result = '';
        if ($arabicNumber === 9) {
            $arabicNumber -= 9;
            $result .= 'IX';
        }

        if ($arabicNumber >= 5) {
            $result .= 'V';
            $arabicNumber -= 5;
        }

        if ($arabicNumber === 4) {
            $arabicNumber -= 4;
            $result .= 'IV';
        }

        for ($i = 0; $i < $arabicNumber; $i++) {
            $result .= 'I';
        }

        return $result;
    }
}
