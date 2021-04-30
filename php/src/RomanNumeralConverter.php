<?php
declare(strict_types=1);

namespace Kata;

class RomanNumeralConverter
{
    private int $arabicNumber;

    public function convertToRoman(int $arabicNumber): string
    {
        $this->arabicNumber = $arabicNumber;
        $result = '';
        $result .= $this->transform(10, 'X');
        $result .= $this->transform(9, 'IX');
        $result .= $this->transform(5, 'V');
        $result .= $this->transform(4, 'IV');
        $result .= $this->transform(1, 'I');

        return $result;
    }

    private function transform(int $number, string $symbol): string
    {
        $result = '';
        while ($this->arabicNumber >= $number) {
            $this->arabicNumber -= $number;
            $result .= $symbol;
        }

        return $result;
    }
}
