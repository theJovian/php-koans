<?php


namespace koans;


class MyString
{

    /**
     * MyString constructor.
     */
    public function __construct()
    {
    }

    public function doubleQuotedStringsAreStrings():string
    {
        return "Double quoted string";
    }

    public function singleQuotedStringsAreAlsoStrings():String
    {
        return 'This is a single quoted string, don\'t split us apart XD';
    }

    public function useBackslashForEscapingQuotesInStrings():string
    {
        return "\"Check out this double quotes baby\"";
    }

    public function dotConcatenatesStrings():string
    {
        return "String 1" . "String 2";
    }

    public function dotWorksWithVariables():string
    {
        $myFirstString = "Hello";
        $mySecondString = " phpUnit";
        return $myFirstString . $mySecondString;
    }

    public function dotEqualsAppendsToEndOfString():string
    {
        $myString = "10 fast fingers";
        $myString .= " is cool";
        return $myString;
    }

    public function getTheLengthOfAString(string $stringToTest):int
    {
        return strlen($stringToTest);
    }

    public function countWordsInAString(string $stringToTest):int
    {
        return str_word_count($stringToTest);
    }

    public function reverseAString(string $stringToTest):string
    {
        return strrev($stringToTest);
    }

    public function searchForATextWithinAString(string $stringToTest, string $textToSearch):bool
    {
        return strpos($stringToTest, $textToSearch);
    }

    public function replaceTextWithinAString(string $textToReplace, string $newText, string $myString):string
    {
        return str_replace($textToReplace, $newText, $myString);
    }
}