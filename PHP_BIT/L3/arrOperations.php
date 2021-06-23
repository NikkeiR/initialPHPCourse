<?php

    $myArray = [];
    array_push($myArray, 55); // reiksmiu idejimas i masyvo gala
    array_push($myArray, 3.14);
    array_push($myArray, NULL);
    array_push($myArray, -2);
    array_push($myArray, "Petriukas");
    array_push($myArray, "");
    
    print("<pre>");
    print_r($myArray);

    array_splice($myArray, 5, 1); // istrina masyvo reiksmes (nuo 5 idekso ir kiek nariu)
    print_r($myArray);

    $result = array_search(-2, $myArray, true);
    print_r($result . "<br>"); // suranda nurodytos reiksmes indekso numeri, jei toki randa

    print_r(array_slice($myArray, 1)); // istrina masyvo reiksmes iki 1 indekso ir grazina likusi masyva

    array_splice($myArray, 1, 1, 22); // ideda nauja reiksme (i 1 indekso vieta (antras skaicius nurodo kiek nariu istrinti))
    print_r($myArray);


    $arr = [2,3,4,22,-9,18,-1];

    print(min($arr) . "<br>"); // -9
    print(max($arr) . "<br>"); // 22
    print(array_sum($arr)); // 39
?>