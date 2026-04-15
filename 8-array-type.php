<?php

$names = ["haechan", "gisel", "ningning", "jaemin"];

$status = array("singel", "taken", "marrided");

$names[1] = "fattah fernandes";

// menambahkan sebuah data ke array yang lama
$names[] = "aqella";

// halo nama saya jaemin, status saya sekarang singel
echo "halo nama saya $names[3], status saya sekarang $status[0]\njumlah data ada " . count($names) . " orang\t";

// jumlah data status adalah 3
echo "jumlah data status adalah : ". count($status);

