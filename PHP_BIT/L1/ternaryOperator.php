<?php

$myAge = 18;
print($myAge >= 18 ? "Galite uzeiti" : "Klubas aptarnauja tik pilnamecius");

print("<br>");

// nestintas ternary operator
$myAge = 18;
$myName = "Petras";
print($myAge >= 18 ? ($myName == "Jonas" ? "Galite uzeiti" : "Tik Jonukams") : "Klubas aptarnauja tik pilnamecius");