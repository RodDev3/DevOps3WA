<?php

namespace App\Model;

class Number
{
    public function __construct(private float $number)
    {
    }

    public function getNumber(): float
    {
        return $this->number;
    }

    public function setNumber(float $number): self
    {
        $this->number = $number;

        return $this;
    }
}
