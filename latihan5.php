<?php

    $nilai = 81;

    if($nilai > 90){
        echo "Nilai A";
    }else if($nilai > 80 && $nilai <= 90){
        echo "Nilai B";
    }else if($nilai > 70 && $nilai <= 80){
        echo "Nilai C";
    }else if($nilai > 60 && $nilai <= 70){
        echo "Nilai D";
    }else{
        echo "Nilai E";
        
    }

?>