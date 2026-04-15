<?php

// Kode Break
$number = 3;

while(true) {
    echo "Break dulu : " . $number . PHP_EOL;
    $number++;

    if($number > 7)
        break;
}

// Kode Continue
for($number = 0; $number <= 10; $number++) {
    if($number % 2 == 0) {
        continue;
    }
    echo "Continue : " . $number . PHP_EOL;
}