<?php
require_once "src/FindAndReplace.php";
    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_checkArray()
        {
                $test_string = new FindAndReplace;
                //Arrange
                $input1 = "I have a cat and a cat";
                $input2 = "cat";
                $input3 = "dog";
                $test_string->checkArray($input1, $input2, $input3);
                //Act
                $result = $test_string->checkArray($input1, $input2, $input3);
                //Assert
                $this->AssertEquals(['I', 'have', 'a', 'dog', 'and', 'a', 'dog'], $result);
        }
    }
 ?>
