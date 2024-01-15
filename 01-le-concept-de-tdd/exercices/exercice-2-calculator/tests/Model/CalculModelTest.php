<?php

namespace App\Tests\Model;

use App\Model;
use App\Model\Divisor;
use App\Model\Add;
use App\Model\Sub;
use App\Model\Number;
use App\Model\NumberString;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

#[Attributes\CoversClass(Add::class)]
#[Attributes\CoversClass(Divisor::class)]
#[Attributes\CoversClass(Sub::class)]
#[Attributes\CoversClass(Number::class)]
#[Attributes\CoversClass(NumberString::class)]
class CalculModelTest extends TestCase
{
    public function testAdd(){

        $calculator = new Add();
        $number = new Number(7);
        $number->setNumber(9);
        $resultat = $calculator->exec($number,new Number(6));

        $this->assertEquals('15', $resultat);

    }

    public function testDivision(){
        $calculator = new Divisor();
        $resultat = $calculator->exec(new Number(10),new Number(2));

        $this->assertEquals('5', $resultat);
    }

    public function testExceptionDivisor(){
        $calculator = new Divisor();
        $this->expectExceptionMessage("Impossible de diviser par zéro.");
        $resultat = $calculator->exec(new Number(10),new Number(0));

    }

    public function testSub(){
        $calculator = new Sub();
        $resultat = $calculator->exec(new Number(10),new Number(2));

        $this->assertEquals('8', $resultat);
    }
}
