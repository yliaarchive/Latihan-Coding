<?php

function checkStatusKelulusan($grade=50, $remidial=0){
    if($grade > 70 && $remidial < 85){
        echo "anda lulus";
    }else{
        echo "tidak lulus";
    }
}

checkStatusKelulusan();