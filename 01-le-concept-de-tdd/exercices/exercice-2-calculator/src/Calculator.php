<?php

namespace App;

class Calculator
{

    public function __construct(private $precision)
    {
    }

    public function add(float $a, float $b): float
    {
        return round($a + $b, $this->precision);
    }

    public function division(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new \DivisionByZeroError("Impossible de diviser par zéro");
        }

        return round($a / $b, $this->precision);
    }

    public function getPrecision(): float
    {
        return $this->precision;
    }

    public function setPrecision(float $precision): self
    {
        $this->precision = $precision;

        return $this;
    }
}
