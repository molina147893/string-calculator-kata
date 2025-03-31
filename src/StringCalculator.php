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
}
