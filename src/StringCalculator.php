<?php

namespace Deg540\StringCalculatorPHP;

use Exception;
use function PHPUnit\Framework\throwException;

class StringCalculator
{

    public function __construct()
    {
    }

    public function add(string $numbers): int
    {
        if($this->isEmpty($numbers)){
            return 0;
        }
        if($this->hasCustomDelimiter($numbers)){
            $numbers = $this->replaceCustomDelimiter($numbers);
        }
        $add = 0;
        $negatives = array();
        $number = strtok($numbers, ",\n");
        while ($number !== false) {
            $value = intval($number);
            if($value < 0){
                $negatives[] = $value;
            }
            $add += $value;
            $number = strtok(",\n");
        }
        if($this->thereAreNegatives($negatives)){
            throw new Exception('negativos no soportados: ' . implode(", ", $negatives));
        }
        return $add;
    }

    public function isEmpty(string $numbers): bool
    {
        return $numbers === "";
    }

    public function hasCustomDelimiter(string $numbers): bool
    {
        return str_starts_with($numbers, "//");
    }

    public function replaceCustomDelimiter(string $numbers): string|array
    {
        $delimiter = $numbers[2];
        $numbers = substr($numbers, 4);
        $numbers = str_replace($delimiter, ",", $numbers);
        return $numbers;
    }
    
    public function thereAreNegatives(array $negatives): bool
    {
        return count($negatives) > 0;
    }
}
