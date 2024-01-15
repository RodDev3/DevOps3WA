<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

#[Attributes\CoversClass(Calculator::class)]
class CalculatorTest extends TestCase
{
    #[Attributes\DataProvider('dataProviderAdd')]
    public function testAdd($data1, $data2, $resultatAttendu)
    {
        $calculator = new Calculator(2);
        $resultat = $calculator->add($data1, $data2);

        $this->assertEquals($resultatAttendu, $resultat);

    }

    #[Attributes\DataProvider('dataProviderDivision')]
    public function testDivision($data1, $data2, $resultatAttendu)
    {
        $calculator = new Calculator(2);
        $resultat = $calculator->division($data1, $data2);

        $this->assertEquals($resultatAttendu, $resultat);
    }

    public function testDivisionByZero()
    {
        $calculator = new Calculator(2);
        $this->expectExceptionMessage("Impossible de diviser par zéro");
        $resultat = $calculator->division(5, 0);
    }

    public static function dataProviderAdd(): array
    {
        return [
            [1,2,3],
            [4,5,9],
            [150,250,400],
        ];
    }

    public static function dataProviderDivision(): array
    {
        return [
            [10,5,2],
            [100,5,20],
            [100,8,12.5],
        ];
    }
}
