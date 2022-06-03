<?php

    #Test Case 1
    echo "<pre>";
    var_dump(isNumber("-45.55"));
    echo "</pre>";

    #Test Case 2
    echo "<pre>";
    var_dump(isNumber("43.4.-5"));
    echo "</pre>";


    /**
     * Returns if a given string is a valid number
     * 
     * @param String $string string to evaluate
     * 
     * @return Bool $boolValid
     */
    function isNumber($string) {
        $validChars = ["0","1","2","3","4","5","6","7","8","9",".","-"];
        $boolFoundDecimal = false;
        $boolFirst = true;
        $boolValid = true;

        $arrChars = str_split($string);

        foreach($arrChars AS $char) {
            if($char === "-" && !$boolFirst) {
                $boolValid = false;
                break;
            }

            if($char === "." && $boolFoundDecimal) {
                $boolValid = false;
                break;
            } else if($char === "." && !$boolFoundDecimal) {
                $boolFoundDecimal = true;
            }

            $boolFoundValid = false;
            foreach($validChars AS $validChar) {
                if($char === $validChar) {
                    $boolFoundValid = true;
                    break;
                }
            }

            if(!$boolFoundValid) {
                $boolValid = false;
                break;
            }
            
            $boolFirst = false;
        }

        return $boolValid;

    }

?>