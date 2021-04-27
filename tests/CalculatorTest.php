<?php

use \App\Calculator;
use \PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    public function setUp(): void
    {
        $this->calculator = new Calculator;
    }

    public function testAdd()
    {  
        $this->assertEquals(25, $this->calculator->add(20,5));
    }

    public function testSubtract()
    {   
        $this->assertEquals(15, $this->calculator->subtract(20,5));
    }   
}




