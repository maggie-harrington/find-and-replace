<?php

    class FindAndReplace {

        function checkArray ($phrase, $search_term, $replace_term)
        {
            $phrase = strtolower($phrase);

            $exploded_phrase = explode(' ', $phrase);

            $replaced_word = str_replace($search_term, $replace_term, $exploded_phrase);

            $replaced_word = implode(' ', $replaced_word);

            return $replaced_word;

        }
    }
 ?>
