<?php

namespace App;

use PHPUnit\Logging\Exception;

class Calculator
{
    public static function add(string $numbers): int
    {
        if(empty($numbers)){
            return 0;
        }

        if (str_ends_with($numbers, ',')){
            throw new \Exception('La chaine ne peut pas finir par un delimiter');
        }

        preg_match('/\/\/(.+)\n(.*+)/', $numbers, $matches);
        $delimiter = sprintf("/[\\n%s]/", $matches[1] ?? ',');
        $numbers = $matches[2] ?? $numbers;

        $delimiter = "/[\s,]/";
        $numberArray = preg_split($delimiter, $numbers);
        $numberArray = explode(',',$numbers);

        return array_reduce($numberArray, fn($carry, $item) => $carry += (int) $item);
    }
}