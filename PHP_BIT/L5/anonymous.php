<?php

    $arr = [1,2,3,4,5];

    print("<pre>");
    print_r($arr);
    print("</pre>");
    
    // anonimine funkcija
    $mapped_arr = array_map(function($x) { return $x * $x; }, $arr);

    print("<pre>");
    print_r($mapped_arr);
    print("</pre>");



?>