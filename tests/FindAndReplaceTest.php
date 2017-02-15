<?php
require_once "src/FindAndReplace.php";
    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_checkArray()
        {
            $test_string = new FindAndReplace;
            //Arrange
            $input1 = "I have 1 cat and a cathedral.";
            $input2 = "1";
            $input3 = "12";
            $test_string->checkArray($input1, $input2, $input3);
            //Act
            $result = $test_string->checkArray($input1, $input2, $input3);
            //Assert
            $this->AssertEquals("i have 12 cat and a cathedral.", $result);
        }
    }
 ?>
