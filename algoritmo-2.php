<?php

    # Test Case 1
    $arrTest1 = [1,3,3,3,1,5];
    echo "<pre>";
    print_r(getArrayWithoutDuplicates($arrTest1));
    echo "</pre>";

    # Test Case 2
    $arrTest2 = []
    echo "<pre>";
    print_r(getArrayWithoutDuplicates($arrTest2));
    echo "</pre>";

    /**
     * Returns given array without duplicated values.
     * 
     * @param Array $array array to operate
     * 
     * @return Array $array array without dupliactes
     */
    function getArrayWithoutDuplicates($array) {
        $arrReturn = array();

        if(count($array) > 0) {
            foreach($array AS $value) {
                $boolFound = false;
                foreach($arrReturn AS $value2) {
                    if($value == $value2) {
                        $boolFound = true;
                        break;
                    }
                }

                if($boolFound == false) {
                    $arrReturn[] = $value;
                }
            }
        }

        return $arrReturn;
    }

?>