<?php

  class Anagram
    {
      function make_anagram($input_string1, $input_string2) {
        $array_of_words = explode(" " , $input_string2);

        $array1 = str_split($input_string1);
        sort($array1);
        $matched_words = array();

        foreach ($array_of_words as $word) {
          $split_word = str_split($word);
          sort($split_word);
          // var_dump($sorted_array1);
          // var_dump($sorted_word);
          if ($array1 == $split_word) {
            array_push($matched_words, $word);
          }
        }

        return implode(" " , $matched_words);
      }

    }

 ?>
