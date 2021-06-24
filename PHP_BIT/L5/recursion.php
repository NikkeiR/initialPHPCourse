<?php

    // Faktorialo (factorial) skaiciavimas 5! = 5*4*3*2*1 (n! = n * (n-1))

    function factorial($number) {
        if($number <= 1) {
            return 1; // base case
        } else {
            return $number * factorial($number - 1); // recursive step
        }
    }

    $result = factorial(5);
    print($result);

?>