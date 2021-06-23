<?php

    // $arr = [7,3,5,1,4,-2];
    $arr = ["Jonas","Antanas","Petriukas","Martynas","Bronius","Rolas"];
    print("<pre>");
    print_r($arr);
    print("<pre>");

    // sortinimas su for loop ir swap
    for($i=0; $i<count($arr); $i++) {
        for($j=$i+1; $j<count($arr); $j++) {
            if(strcmp($arr[$i], $arr[$j]) > 0) { // arba if($arr[$i] > $arr[$j])
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            } 
        }
    }
    print("<pre>");
    print_r($arr);
    print("</pre>");

    print("<br>");
    print(".................................................................");

    $assoc_arr = ["A" => 55, "C" => 6, "B" => 4];

    print("<pre>");
    print_r($assoc_arr);
    print("<pre>");

    // sortinimas associative masyvo
    $keys = array_keys($assoc_arr);
    for($i=0; $i<count($assoc_arr); $i++) {
        for($j=$i+1; $j<count($assoc_arr); $j++) {
            if($assoc_arr[$keys[$i]] > $assoc_arr[$keys[$j]]) {
                $tmp = $assoc_arr[$keys[$i]];
                $assoc_arr[$keys[$i]] = $assoc_arr[$keys[$j]];
                $assoc_arr[$keys[$j]] = $tmp;
            }
        }
    }
    print("<pre>");
    print_r($assoc_arr);
    print("<pre>");
    // isrikiuoja palei value, bet keys lieka vietoje (not good) !!
    
?>