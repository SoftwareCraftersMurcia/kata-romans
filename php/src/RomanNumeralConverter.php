<?php
declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    public function convertToRoman(int $arabicNumber): string
    {
        $result = '';

        $result .= $this->transform($arabicNumber, 10,'X');
        $result .= $this->transform($arabicNumber, 9,'IX');
        $result .= $this->transform($arabicNumber, 5,'V');
        $result .= $this->transform($arabicNumber, 4,'IV');
        $result .= $this->transform($arabicNumber, 1,'I');

        return $result;
    }

    private function transform(int &$arabicNumber, int $number, string $symbol): string
    {
        $result = '';
        while ($arabicNumber >= $number) {
            $arabicNumber -= $number;
            $result .= $symbol;
        }

        return $result;
    }
}
