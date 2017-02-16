<?php

    class FindAndReplace {

        private $phrase;

        function __construct($new_phrase){

            $this->phrase = $new_phrase;
        }

        function getFindAndReplace()
        {
            return $this->phrase;
        }

        static function checkArray ($phrase, $search_term, $replace_term)
        {
            $phrase = strtolower($phrase);

            $exploded_phrase = explode(' ', $phrase);

            $replaced_word = str_replace($search_term, $replace_term, $exploded_phrase);

            $replaced_word = implode(' ', $replaced_word);

            return $replaced_word;

        }
    }
 ?>
