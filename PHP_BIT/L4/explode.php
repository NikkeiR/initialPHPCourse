<?php

    $arr = [
        "Mindaugas Ber" => [2,7,5,4],
        "Jonas Jon" => [6,4,7,8],
        "Mindaugas Petr" => [10,9,10,8]
    ];

    print("<pre>");
    print_r($arr);
    print("</pre>");

    foreach ($arr as $name => $grades) { 
        $name = explode(" ", $name)[0];
        if ($name === "Mindaugas") {
            print($name);
            $sum = 0;
            foreach ($grades as $grade) {
                $sum += $grade; 
            }
            print(" Vidurkis: " . $sum / count($grades) . "<br>");
        }
    }



?>