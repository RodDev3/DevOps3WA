<?php

namespace App\Model;

class NumberString
{

    public function __construct(private float $number)
    {
    }

    public function __toString(): string
    {
        return  (string) $this->number;
    }
}
