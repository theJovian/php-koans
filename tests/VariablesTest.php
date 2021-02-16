<?php

namespace koans\Test;

use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase
{
    /*
     *  --Variables--
     */

    /**
     * @test
     **/
    public function declareAnInt()
    {
        $variables = new Variable();
        $integerValue = $variables->declareAnInt();
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     **/
    public function declareABoolean()
    {
        $variables = new Variable();
        $booleanValue = $variables->declareABoolean();
        $this->assertIsBool($booleanValue);
    }

    /**
     * @test
     **/
    public function declareAFloat()
    {
        $variables = new Variable();
        $floatValue = $variables->declareAFloat();
        $this->assertIsFloat($floatValue);
    }

    /**
     * @test
     **/
    public function declareAnArray()
    {
        $variables = new Variable();
        $arrayValue = $variables->declareAnArray();
        $this->assertIsArray($arrayValue);
    }

    /**
     * @test
     **/
    public function declareAnIntWithNullValue()
    {
        $variables = new Variable();
        $intNullValue = $variables->declareAnIntWithNullValue();
        $this->assertIsNotInt($intNullValue);
    }

    /**
     * @test
     **/
    public function assignAVariableValueToAnotherVariable()
    {
        $variables = new Variable();
        $firstValue = 1;
        $secondValue = $variables->assignAVariableValueToAnotherVariable($firstValue);
        $this->assertNotEquals($firstValue, $secondValue);
    }

    /**
    * @test
    **/
    public function testCastStringIntToBoolean()
    {
        $variable = new Variable();
        $stringToTest = "this is not a boolean, is it?";
        $result = $variable->castStringIntToBoolean($stringToTest);
        $this->assertTrue($result);
    }
}
