<?php

$name = NULL; // jei vardas neįvestas
$lastname = "Petraitis";

// pirmas variantas
print($name ?? '<>' . $lastname); // ?? operatorius
print("<br>");

// antras variantas
print($name == NULL ? '<>' . $lastname : $name); // tas pat