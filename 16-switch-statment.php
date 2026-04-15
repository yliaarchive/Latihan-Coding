<?php

$grade = 'A';

switch($grade) {
    case "A":
        echo "Sangat Bagus";
        break;
    case "B":
        echo "Bagus";
        break;
    case "C":
        echo "Cukup";
        break;
    case "D":
        echo "Kurang";
        break;
    case "E":
        echo "Sangat Kurang";
        break;
    default: // Untuk nilai yang tidak Valid
        echo "Nilai Tidak Valid";                  
}