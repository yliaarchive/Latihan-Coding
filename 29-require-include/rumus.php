<?php

// 1. Rumus persegi 
function luasPersegi(int $sisi): int {
    $luas = $sisi * $sisi;
    return $luas;
}

// 2. Rumus persegi panjang
function luasPersegiPanjang(int $panjang, int $lebar): int {
    $luas = $panjang * $lebar;
    return $luas;
}