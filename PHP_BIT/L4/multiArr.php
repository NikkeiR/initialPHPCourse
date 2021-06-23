<?php

    $arr = [
        ["Aloyzas", "Martynas", "Antanas"],
        ["Petriukas", "Jonukas"],
        ["Onute"]
    ];

    // visu reiksmiu pasiekimas (+ atskirimas kableliais)
    for($i=0; $i<count($arr); $i++) {
        for($j=0; $j<count($arr[$i]); $j++) {
            print($arr[$i][$j]);
            if(!($j + 1 == count($arr[$i]))){
                print(", ");
              } 
        }
        print("<br>");
    }



?>