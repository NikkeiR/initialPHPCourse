<?php

    // findFirst pavyzdukas (for + if + break)
    $findFirst = ["Jurgis","Antanas","Aloyzas","Martynas"];

    for($i=0; $i<count($findFirst); $i++) {
        if($findFirst[$i] === "Aloyzas") {
            print("Here you go: " . $findFirst[$i] . " right here!");
            break;
        }
    }

    // foreach panaudojimas
    foreach($findFirst as $v) {
        if($v == "Aloyzas") {
            print("<br>Here you go: " . $findFirst[$i] . " right here!");
            break;
        }
    }



?>