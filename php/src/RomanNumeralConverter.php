<?php declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    public function convertToRoman(int $arabicNumber): string
    {
        $result = '';
        if ($arabicNumber > 3) {
            return 'IV';
        }

        for ($i = 0; $i < $arabicNumber; $i++) {
            $result .= 'I';
        }

        return $result;
    }
}
