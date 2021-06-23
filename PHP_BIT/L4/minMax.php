<?php

    $arr = [13,2,22,5,7];

    // randa maziausia skaiciu masyve
    $min = $arr[0];
    for($i=1; $i<count($arr); $i++) {
        if($min > $arr[$i]) { // if($min < $arr[$i]) - randa didziausia skaiciu masyve
            $min = $arr[$i];
        }
    }
    print($min);

?>