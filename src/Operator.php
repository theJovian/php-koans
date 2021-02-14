<?php


namespace koans;


class Operator
{

    /**
     * Operator constructor.
     */
    public function __construct()
    {
    }

    public function add(int $number1, int $number2):int
    {
        return $number1 + $number2;
    }

    public function subtract(int $number1, int $number2):int
    {
        return $number1 - $number2;
    }

    public function multiply(int $number1, int $number2):int
    {
        return $number1 * $number2;
    }

    public function divide(int $number1, int $number2):int
    {
        return $number1 / $number2;
    }

    public function module(int $number1, int $number2):int
    {
        return $number1 % $number2;
    }

    public function exponent(int $number1, int $number2):int
    {
        return pow($number1, $number2);
    }

    public function equal(int $number1, int $number2):bool
    {
        return $number1 == $number2;
    }

    public function identical(int $number1, int $number2):bool
    {
        return $number1 === $number2;
    }

    public function notEqual(int $number1, int $number2):bool
    {
        return $number1 != $number2;
    }

    public function notIdentical(int $number1, int $number2):bool
    {
        return $number1 !== $number2;
    }

    public function greaterThan(int $number1, int $number2):bool
    {
        return $number1 > $number2;
    }

    public function lessThan(int $number1, int $number2):bool
    {
        return $number1 < $number2;
    }

    public function greaterOrEqualThan(int $number1, int $number2):bool
    {
        return $number1 >= $number2;
    }

    public function lessOrEqualThan(int $number1, int $number2):bool
    {
        return $number1 <= $number2;
    }
}