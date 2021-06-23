<?php

    $arr = [9,2,1,5];

    foreach($arr as $v) {
        var_dump($v);
    }

    // foreach([9,2,1,5] as $val) {
    //     print($val . " ");
    // }

    $multiArr = [
        "A" => 1, "B" => 2, "C" => 3
    ];

    foreach($multiArr as $k => $v) {
        print($k . "->" . $v . " ");
    }

    print("<br> .......................................................... <br>");

    $assoc_arr = [
        "Petriukas" => [10,9,7],
        "Jonukas" => [7,5,2],
        "Onute" => [3,10,10]
    ];
    
    foreach($assoc_arr as $name => $grades) {
        print("<pre>");
        var_dump($name);
        print("</pre>");
        foreach($grades as $grade) {
            var_dump($grade);
        }
    }


?>