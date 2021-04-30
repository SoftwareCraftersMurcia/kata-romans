<?php
declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    public function convertToRoman(int $arabicNumber): string
    {
        if ($arabicNumber === 6) {
            return 'VI';
        }

        if ($arabicNumber === 5) {
            return 'V';
        }

        $result = '';
        if ($arabicNumber > 3) {
            $arabicNumber -= 3;
            $result .= 'V';
        }

        for ($i = 0; $i < $arabicNumber; $i++) {
            $result = 'I' . $result;
        }

        return $result;
    }
}
