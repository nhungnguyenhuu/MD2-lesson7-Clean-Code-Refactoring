<?php

use PHPUnit\Framework\TestCase;

include_once "..\app\Calculator.php";

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
     $a = new Calculator();
     $firstNumber = 1;
     $secondNumber =2;
     $addition = '+';
     $result = $a->calculate($firstNumber, $secondNumber, $addition);
     $extend = 3;
     $this-> assertEquals($result, $extend);

    }

    public function testDivision()
    {
        $a = new Calculator();
        $firstNumber = 2;
        $secondNumber = 0;
        $addition = '/';
        $result = $a->calculate($firstNumber, $secondNumber, $addition);
        $extend= 'Can not divide by';
        $this->assertEquals($result, $extend);
    }

}