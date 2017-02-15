<?php
require_once "src/FindAndReplace.php";
    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_checkArray()
        {
                $test_string = new FindAndReplace;
                //Arrange
                $input = "I have a cat";
                $test_string->checkArray($input);
                //Act
                $result = $test_string->checkArray($input);
                //Assert
                $this->AssertEquals(['I', 'have', 'a', 'cat'], $result);
        }
    }
 ?>
