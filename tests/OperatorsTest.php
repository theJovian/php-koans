<?php

namespace koans\Test;

use koans\Operator;
use PHPUnit\Framework\TestCase;

class OperatorsTest extends TestCase
{
    /**
     * @test
     **/
    public function testAdd()
    {
        $numberToAdd = 1;
        $expectedResult = 2;
        $myOperator = new Operator();
        $result = $myOperator->add($numberToAdd, $numberToAdd);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function testSubtract()
    {
        $numberToSubtract = 1;
        $expectedResult = 0;
        $myOperator = new Operator();
        $result = $myOperator->subtract($numberToSubtract, $numberToSubtract);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function testMultiply()
    {
        $numberToMultiply = 1;
        $expectedResult = 1;
        $myOperator = new Operator();
        $result = $myOperator->multiply($numberToMultiply, $numberToMultiply);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function testDivide()
    {
        $numberToDivide1 = 4;
        $numberToDivide2 = 2;
        $expectedResult = 2;
        $myOperator = new Operator();
        $result = $myOperator->divide($numberToDivide1, $numberToDivide2);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function testModule()
    {
        $numberToModule = 1;
        $expectedResult = 0;
        $myOperator = new Operator();
        $result = $myOperator->module($numberToModule, $numberToModule);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function testExponent()
    {
        $numberToRaise = 1;
        $expectedResult = 1;
        $myOperator = new Operator();
        $result = $myOperator->exponent($numberToRaise, $numberToRaise);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @test
     **/
    public function testEqual()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->equal($firstNumberToTest, $firstNumberToTest);
        $negativeResult = $myOperator->equal($firstNumberToTest, $secondNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

    /**
     * @test
     **/
    public function testIdentical()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->identical($firstNumberToTest, $firstNumberToTest);
        $negativeResult = $myOperator->identical($firstNumberToTest, $secondNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

    /**
     * @test
     **/
    public function testNotEqual()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->notEqual($firstNumberToTest, $secondNumberToTest);
        $negativeResult = $myOperator->notEqual($firstNumberToTest, $firstNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

    /**
     * @test
     **/
    public function testNotIdentical()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->notIdentical($firstNumberToTest, $secondNumberToTest);
        $negativeResult = $myOperator->notIdentical($firstNumberToTest, $firstNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

    /**
     * @test
     **/
    public function testGreaterThan()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->greaterThan($secondNumberToTest, $firstNumberToTest);
        $negativeResult = $myOperator->greaterThan($firstNumberToTest, $firstNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

    /**
     * @test
     **/
    public function testLessThan()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->lessThan($firstNumberToTest, $secondNumberToTest);
        $negativeResult = $myOperator->lessThan($firstNumberToTest, $firstNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

    /**
     * @test
     **/
    public function testGreaterOrEqualThan()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->greaterOrEqualThan($secondNumberToTest, $firstNumberToTest);
        $negativeResult = $myOperator->greaterOrEqualThan($firstNumberToTest, $secondNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

    /**
     * @test
     **/
    public function testLessOrEqualThan()
    {
        $firstNumberToTest = 1;
        $secondNumberToTest = 2;
        $myOperator = new Operator();
        $positiveResult = $myOperator->lessOrEqualThan($firstNumberToTest, $secondNumberToTest);
        $negativeResult = $myOperator->lessOrEqualThan($secondNumberToTest, $firstNumberToTest);
        $this->assertTrue($positiveResult);
        $this->assertFalse($negativeResult);
    }

}
