<?php
    
    $initialArray = generateRandArray();
    $arrRows = generateChildrenArrays($initialArray);

    printPyramid($arrRows, count($initialArray));
    
    function generateRandArray() {
        $arrReturn = array();

        for($i = 0; $i <= 9; $i++) {
            $arrReturn[] = rand(1,10);
        }

        return $arrReturn;
    }

    function generateChildrenArrays($array) {
        $arrReturn = array();
        $arrTMP = array();

        $arrReturn[] = $array;

        do {
            if(count($arrTMP) == 0) {
                $insideArray = $array;
            } else {
                $insideArray = $arrTMP;
                $arrTMP = array();
            }

            $count = count($insideArray) - 1;

            for($i = 0; $i <= $count; $i++) {
                if($i == $count) {
                    break;
                } else {
                    $j = $i + 1;
                    $arrTMP[] = $insideArray[$i] + $insideArray[$j];
                }

            }

            $arrReturn[] = $arrTMP;

        } while(count($arrTMP) > 1);

        return $arrReturn;
    }

    function printPyramid($array, $countFirstRow) {

        $countRow = 0;
        foreach($array AS $row) {

            for($i = 0; $i <= $countRow; $i++) {
                echo "&nbsp;";
            }

            foreach($row AS $value) {
                echo "{$value}  ";
            }
            echo "<br>";
            
            $countRow++;
        }

    }


?>