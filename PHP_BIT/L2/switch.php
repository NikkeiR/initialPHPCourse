<?php

$d = date("D");
var_dump($d);

print("<br>");

switch ($d) {
    case "Mon";
        print("Today is Monday");
        break;
    case "Tue";
        print("Today is Tuesday");
        break;
    case "Wed";
        print("Today is Wednesday");
        break;
    default:
        print("Wonder which day is this?");
}