<?php

    class FindAndReplace {

        function checkArray ($phrase, $search_term)
        {
            $exploded_phrase = explode(' ', $phrase);

            if (in_array($search_term, $exploded_phrase)) {
                return $search_term;
            }


        }



    }


 ?>
