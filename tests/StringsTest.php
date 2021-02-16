<?php

namespace koans\Test;

use koans\MyString;
use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @test
     **/
    public function testDoubleQuotedStringsAreStrings()
    {
        $string = new MyString();
        $result = $string->doubleQuotedStringsAreStrings();
        $this->assertIsString($result);
    }

    /**
     * @test
     **/
    public function testSingleQuotedStringsAreAlsoStrings()
    {
        $string = new MyString();
        $result = $string->singleQuotedStringsAreAlsoStrings();
        $this->assertIsString($result);
    }

    /**
     * @test
     **/
    public function testUseBackslashForEscapingQuotesInStrings()
    {
        $string = new MyString();
        $result = $string->useBackslashForEscapingQuotesInStrings();
        $this->assertIsString($result);
    }

    /**
     * @test
     **/
    public function testDotConcatenatesStrings()
    {
        $string = new MyString;
        $result = $string->dotConcatenatesStrings();
        $this->assertIsString($result);
    }

    /**
     * @test
     **/
    public function testDotWorksWithVariables()
    {
        $string = new MyString();
        $result = $string->dotWorksWithVariables();
        $this->assertIsString($result);
    }

    /**
     * @test
     **/
    public function testDotEqualsAppendsToEndOfString()
    {
        $string = new MyString();
        $result = $string->dotEqualsAppendsToEndOfString();
        $this->assertIsString($result);
    }

    /**
     * @test
     **/
    public function testGetTheLengthOfAString()
    {
        $stringToTest = "phpstorm is cool";
        $expectedNumberOfCharacters = 16;
        $string = new MyString();
        $result = $string->getTheLengthOfAString($stringToTest);
        $this->assertEquals($expectedNumberOfCharacters, $result);
    }

    /**
     * @test
     **/
    public function testCountWordsInAString()
    {
        $stringToTest = "phpstorm is cool";
        $expectedNumberOfWords = 3;
        $string = new MyString();
        $result = $string->countWordsInAString($stringToTest);
        $this->assertEquals($expectedNumberOfWords, $result);
    }

    /**
     * @test
     **/
    public function testReverseAString()
    {
        $stringToTest = "naivoJeht";
        $expectedResult = "theJovian";
        $string = new MyString();
        $result = $string->reverseAString($stringToTest);
        $this->assertEquals($expectedResult, $result);
    }

    /*
     * From now on I'm going to test the positive output and the negative output of the function to test if needed.
     * For example, int the next test, the strings $positiveTextToSearch = "cool" and $negativeTestToSearch = "Cool"
     * are going to be searched in the string $stringToTest = "php is quite cool".
     * The result of the function with $positiveTextToSearch is going to be true and the assert is going to test the true value,
     * whereas the result of the function with $negativeTextToSearch is going to be false and the assert is going to test the false value;
     */

    /**
     * @test
     **/
    public function testSearchForATextWithinAString()
    {
        $stringToTest = "php is quite cool";
        $positiveTextToSearch = "cool";
        $negativeTextToSearch = "Cool";
        $string = new MyString();
        $positiveResult = $string->searchForATextWithinAString($stringToTest, $positiveTextToSearch);
        $negativeResult = $string->searchForATextWithinAString($stringToTest, $negativeTextToSearch);
        $this->assertFalse($negativeResult);
        $this->assertTrue($positiveResult);
    }

    /**
     * @test
     **/
    public function testReplaceTextWithinAString()
    {
        $stringToTest = "php is quite cool";
        $myString = "php is quite bad";
        $newText = "cool";
        $positiveTextToReplace = "bad";
        $negativeTextToReplace = "Bad";
        $string = new MyString();
        $positiveResult = $string->replaceTextWithinAString($positiveTextToReplace, $newText, $myString);
        $negativeResult = $string->replaceTextWithinAString($negativeTextToReplace, $newText, $myString);
        $this->assertEquals($stringToTest, $positiveResult);
        $this->assertEquals($myString, $negativeResult);
    }
}
