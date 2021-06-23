<?php
    // surasti visas nurodytas reiksmes is masyvo per for loop'a
    $find_all = [5,7,10,5,22,13,5,-2,-6,5];

    // $new_arr = [];
    for($i=0; $i<count($find_all); $i++) {
        if($find_all[$i] === 5) {
            // array_push($new_arr, $find_all[$i]);
            var_dump($find_all[$i]);
        }
    }
    // var_dump($new_arr);

    print("<br>");

    // additional example
    // suranda visas nurodytas reiksmes is masyvo per filter metoda
    print_r(array_filter($find_all, function($v) {
        if($v === 5) return true;
    }));
?>
