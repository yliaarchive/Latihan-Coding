<?php

class Person{

//kumpulan property/variabel

    public string $name;
    public string $address;

// Methode untuk menyapa orang lain

function sayHello(string $name) {
    // Halo $name alamatmu di ..... yaa?
    echo "Halo $name alamatmu di {$this->address} yaa?";

}

    public function __construct() {
        echo "Haiiiii".PHP_EOL;
    }

}
$mahasiswa = new Person();
$mahasiswa->address = "Jerowaru";
$mahasiswa->sayHello("Budiiiii");
//TUGAS BUAT CONST MENGGUNAKAN KEYWORD SELF
