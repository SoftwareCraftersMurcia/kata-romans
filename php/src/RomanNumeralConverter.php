<?php
declare(strict_types = 1);

namespace Kata;

class RomanNumeralConverter
{
    private int $arabicNumber;
    private array $letters = [
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function convertToRoman(int $arabicNumber): string
    {
        $this->arabicNumber = $arabicNumber;
        $result = '';
        foreach ($this->letters as $number => $symbol) {
            $result .= $this->transform($number, $symbol);
        }

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
