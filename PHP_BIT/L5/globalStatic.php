<?php

    $var = 55;

    // (global) pakeicia kintamojo reiksme isoreje (uz funkcijos ribu)
    function add() {
        global $var;
        $var++;
    }

    add();
    print($var);

    // (static) naudoja ta pacia reiksme, kuri buvo isaugota po paskutinio funkcijos iskvietimo
    function keep_track() {
        static $count = 0;
        $count++;
        print($count);
        print("<br>");
    }

    print("<br>");
    keep_track();
    keep_track();
    keep_track();

?>