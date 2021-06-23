<?php
    // pasirasome fukcija filtravimui
    function isEven($var) {
        if ($var % 2 == 0) {
            return true;
        }
    }

    $arr = [1,2,3,4,5,6,7];
    $res = array_filter($arr, "isEven"); // filtruojame istatydami i parametrus masyva ir funkcija, kaip stringa
    print_r($res);

    print("<br>");

    function isEven2($var, $var2) {
        print_r($var);
        print_r($var2);
        print("<br>");
    }

    $arr1 = [
        "Rolas" => [9,2,8,5],
        "Jonas" => [10,2,7,7]
    ];
    $filtered_array = array_filter($arr1, "isEven2", ARRAY_FILTER_USE_BOTH);
    print_r($filtered_array);

?>