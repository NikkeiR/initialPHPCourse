<?php

    // 2) Sukurti zmoniu masyva su ju svoriais:

    $arr = [
        "Antanas" => 95,
        "Onute" => 65,
        "Petriukas" => 80
    ];

    print("<pre>");
    print_r($arr);
    print("</pre>");

    // lengviausias zmogus is saraso
    print("Lightest man: " . array_search((min($arr)), $arr));

    // sunkiausias zmogus is saraso
    print("<br> Heaviest man: " . array_search((max($arr)), $arr));

    print("<br><br>");

    if (array_sum($arr) > 500) { // bendras svoris zmogeliuku
        print("Max 500kg in elevator!");
    } else print("You good to go :)");
    
    print("<br>");

    print("<pre>");
    asort($arr); // surusiavimas palei svorius
    print_r($arr);
    print("</pre>");
?>