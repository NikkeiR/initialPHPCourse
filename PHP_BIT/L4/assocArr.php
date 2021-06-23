<?php

    $assoc_arr = ["A" => 1, "B" => 2, "C" => 3];

    for($i=0; $i<count($assoc_arr); $i++) {
        print(array_keys($assoc_arr)[$i]);  // isprintina keys - A B C
        // print($assoc_arr[array_keys($assoc_arr)[$i]]); // isprintina values - 1 2 3
    }





?>