<?php
declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    public function convertToRoman(int $arabicNumber): string
    {
        $result = '';
        if ($arabicNumber === 9) {
            return 'IX';
        }

        if ($arabicNumber >= 5) {
            $result .= 'V';
            $arabicNumber -= 5;
        }

        if ($arabicNumber === 4) {
            return 'IV';
        }

        if ($arabicNumber > 3) {
            $arabicNumber -= 3;
            $result .= 'V';
        }

        for ($i = 0; $i < $arabicNumber; $i++) {
            $result .= 'I';
        }

        return $result;
    }
}
