<?php

function luasPersegiPanjang(int $panjang, int $lebar): int {
    $luas = $panjang * $lebar;
    return $luas;
}

$menghitungLuas = luasPersegiPanjang(2, 4);
echo "luas dari 2 * 4 adalah ".$menghitungLuas;
