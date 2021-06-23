<?php

    // Multidimencinis masyvas
    $arr = [
        [
            ["A","B","C"],
            ["D","E","F"]
        ],
        [
            [1,2,3,4,5],
            [6,7,8,9,10]
        ]
    ];

    print("<pre>");
    print_r($arr);
    print("</pre>");

    print("<br>");
    print_r($arr[1][1][3]);

?>