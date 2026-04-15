<?php

function CheckStatusKelulusan($grade, $remidial){
    if($grade > 70 && $remidial < 95){
        echo "anda lulus";
    }else{
        echo "tidak lulus";
    }
}

CheckStatusKelulusan(77, 80);

// Tugas : Membuat function untuk menghitung Luas Persegi panjang

function luasPersegiPanjang($panjang, $lebar){
    echo "Luas persegi panjang: " . ($panjang * $lebar);
}

luasPersegiPanjang(7, 3);