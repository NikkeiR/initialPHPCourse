<?php

    function fibonacci($number) {
        if($number === 0) {
            return 0;
        } else if($number === 1) {
            return 1;
        } else {
            return fibonacci($number - 1) + fibonacci($number - 2);
        }
    }

    $result = fibonacci(10);
    print($result); // rezultatas 55

    /*
    step  1  0,1
    step  2 (0+1) == 1
    step  3 (1+1) == 2  
    step  4 (1+2) == 3 
    step  5 (2+3) == 5
    step  6 (3+5) == 8
    step  7 (5+8) == 13
    step  8 (8+13) == 21
    step  9 (13+21) == 34
    step 10 (21+34) == 55
    */
?>