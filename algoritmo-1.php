<?php

    # Test Case 1

    $testArray1 = [1,2,1,3,2,4,2,3,3,1,3,3];
    $testValue1 = 3;

    echo "Resultado 1: " . getArrayIndexByValue($testArray1, $testValue1);

    echo "<br/><br/>";

    # Test Case 2

    $testArray2 = [1,2,3,4];
    $testValue2 = 5;

    echo "Resultado 2: " . getArrayIndexByValue($testArray2, $testValue2);

    /**
     * Returns first occurrence index of given value in an Array. If value does not exists returns -1.
     * 
     * @param Array $haystack array to search
     * @param String $value
     * 
     * @return String $returnValue Index of first occurrence
     */
    function getArrayIndexByValue($haystack, $needle) {
        $returnValue = -1;
        foreach($haystack AS $key => $value) {
            if($needle == $value ) {
                $returnValue = $key;
                break;
            }
        }

        return $returnValue;
    }

?>