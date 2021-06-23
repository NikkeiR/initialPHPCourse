<?php

for($i=0; $i<5; $i++) {
    print($i);
}

print("<br>");
// Ciklo valdymo pavyzdziai:

for($i=0; $i<10; $i++) {
    if($i % 2 == 0) {
        continue;
        // praleidzia visus lyginius skaicius (kurie dalinasi is 2 be liekanos) ir ju nespausdina
    }
    print($i); // 1 3 5 7 9
}

print("<br>");

for($i=1; $i<100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        print($i); // suranda ta skaiciu (pati pirma), ji atprintina ir stabdo darba (siuo atveju 15)
        break;
    }
}