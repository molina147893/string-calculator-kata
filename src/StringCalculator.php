<?php

namespace Deg540\StringCalculatorPHP;

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
        $add = 0;
        if($this->hasCustomDelimiter($numbers)){
            $delimiter = $numbers[2];
            $numbers = substr($numbers, 4);
            $numbers = str_replace($delimiter, ",", $numbers);
        }
        $number = strtok($numbers, ",\n");
        while ($number !== false) {
            $add += intval($number);
            $number = strtok(",\n");
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
}
