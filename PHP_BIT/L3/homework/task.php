<?php

    // 1) Pailiustruoti operacijas:
    // 1.1) Su vienmaciu masyvu:

    $arr = [2,3,4,5,10,-2];

    print(array_sum($arr));
    print("<br>");
    print(min($arr));
    print("<br>");
    print(max($arr));
    print("<br>" . "....................................." . "<br>");

    // 1.2) Su asociatyviu masyvu:

    $assoc_arr = [
        "Petriukas" => [2,8,3,5,10],
        "Onute" => [9,9,10,8,7],
        "Jonukas" => [5,7,4,8,9]
    ];
    print("<pre>");
    print_r($assoc_arr);
    print("</pre>");

    print_r(array_sum(($assoc_arr["Petriukas"])));
    print("<br>");
    print_r(min($assoc_arr["Onute"]));
    print("<br>");
    print_r(max($assoc_arr["Jonukas"]));

    print("<br>");

    print("<pre>");
    $filtered_arr = array_filter($assoc_arr, function($value) {
        print_r($value);
    }, ARRAY_FILTER_USE_BOTH);
    print("</pre>");
    
?>