<?php
    
    // Asociatyvus masyvas
    $arr = [
        // key => value
        "Jonas" => "Jonaitis",
        "Petras" => "Petraitis",
        "Onute" => "Onaityte"
    ];

    print("<pre>");
    print_r($arr);
    print("</pre>");

    print("<br>");
    print_r($arr["Jonas"]);

    print("<br>");
    print_r(array_keys($arr));

    print("<br>");
    print_r(array_values($arr));

?>