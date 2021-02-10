<?php


namespace koans;


class Variable
{
    public function __construct()
    {
    }

    public function declareAnInt(){
        return 1;
    }

    public function declareABoolean(){
        return true;
    }

    public function declareAFloat(){
        return 3.14;
    }

    public function declareAnArray(){
        $array = [1, 2];
        return $array;
    }

    public function declareAnIntWithNullValue(){
        $int = null;
        return $int;
    }

    public function assignAVariableValueToAnotherVariable($value){
        return $value++;
    }
}