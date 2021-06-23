<?php

    $arr = ["Marius","Rolas","Martynas","Petriukas","Motiejus"];

    $fileter_arr = [];
    for($i=0; $i<count($arr); $i++) {
        if(substr($arr[$i], 0, 1) === "M") {
            array_push($fileter_arr, $arr[$i]);
            // var_dump($arr[$i]);
        }
    }
    print_r($fileter_arr);

?>