<?php
  require_once "src/anagram.php";

  class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_make_anagram()
        {
           $input_string1 = "bread";
           $input_string2 = "beard";
           //Act
           $newAnagram = new Anagram;
           $result = $newAnagram->make_anagram($input_string1, $input_string2);
           //Assert
           $this->assertEquals("beard", $result);
        }

        function test_multiple()
        {
          $input_string1 = "bread";
          $input_string2 = "beard dearb okay";
          $newAnagram = new Anagram;
          $result = $newAnagram->make_anagram($input_string1, $input_string2);
          //Assert
          $this->assertEquals("beard dearb", $result);

        }


}
  ?>
