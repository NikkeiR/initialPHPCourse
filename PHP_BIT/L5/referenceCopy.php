<?php

    function f($x) { // reiksme nesikeicia po funkcijos panaudojimo uz funkcijos ribu (copy)
        return ++$x;
    }

    // function f(&$x) { // su ampersandu keicia reiksme po fukcijos panaudjimo uz funkcijos ribu (reference)
    //     return ++$x;
    // }

    $var = 55;
    print("Funkcijos grazinama reiksme: ");
    print(f($var));
    print('<br>');
    print("Orginali reiksme 55, po funkcijos panaudojimo: " . $var);

?>