<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;


class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertEquals(0, Calculator::add(""));
        $this->assertEquals(1, Calculator::add("1"));
        $this->assertEquals(3, Calculator::add("1,2"));
        $this->assertEquals(45, Calculator::add("1,2,3,4,5,6,7,8,9"));
        $this->assertEquals(45, Calculator::add("1,2,\n3,4,5,6,\n7,8,9"));
    }

    public function testFailWhenEndingByADelimiter():void
    {
        $this->expectExceptionMessage("La chaine ne peut pas finir par un delimiter");
        Calculator::add("1,2,3,4,5,6,7,8,9,");
    }

    public function testAddWithCustomDelimiter()
    {
        $this->assertEquals(3, Calculator::add("//;\n1;2"));
        $this->assertEquals(7, Calculator::add("//sep\n2sep5"));
    }
}