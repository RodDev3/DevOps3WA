<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

#[Attributes\CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    public function testGetMultiple(): void
    {
        $this->assertEquals("4", FizzBuzz::getMultiple(4));
    }

    public function testGetMultipleOfThreeAndShouldReturnFizz(): void
    {
        $this->assertEquals('Fizz', FizzBuzz::getMultiple(3));
        $this->assertEquals('Fizz', FizzBuzz::getMultiple(6));
        $this->assertEquals('Fizz', FizzBuzz::getMultiple(9));
    }

    public function testGetMultipleOfFiveAndShouldReturnBuzz(): void
    {
        $this->assertEquals('Buzz', FizzBuzz::getMultiple(5));
        $this->assertEquals('Buzz', FizzBuzz::getMultiple(10));
    }

    public function testGetMultipleOfFiveAndThreeAndShouldReturnFizzBuzz(): void
    {
        $this->assertEquals('FizzBuzz', FizzBuzz::getMultiple(15));
        $this->assertEquals('FizzBuzz', FizzBuzz::getMultiple(30));
        $this->assertEquals('FizzBuzz', FizzBuzz::getMultiple(45));
    }
}