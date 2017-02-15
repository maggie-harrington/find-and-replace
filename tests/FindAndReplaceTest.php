<?php
require_once "src/FindAndReplace.php";
    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_checkArray()
        {
                $test_string = new FindAndReplace;
                //Arrange
                $input1 = "I have a cat";
                $input2 = "cat";
                $test_string->checkArray($input1, $input2);
                //Act
                $result = $test_string->checkArray($input1, $input2);
                //Assert
                $this->AssertEquals("cat", $result);
        }
    }
 ?>
