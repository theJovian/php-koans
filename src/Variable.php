<?php


namespace koans;


use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Scalar\String_;

class Variable
{
    public function __construct()
    {
    }

    public function declareAnInt():int
    {
        return 1;
    }

    public function declareABoolean():bool{
        return true;
    }

    public function declareAFloat():float{
        return 3.14;
    }

    public function declareAnArray():array{
        return [1, 2];
    }

    /*
     * TODO: check the purpose of this functionality
     */
    public function declareAnIntWithNullValue(){
        return null;
    }

    public function assignAVariableValueToAnotherVariable(int $value):int{
    return ++$value;
    }

    /*
     * TODO: check the purpose of this functionality
     */
    public function castStringIntToBoolean(String $value):bool
    {
        return (bool)$value;
    }
}