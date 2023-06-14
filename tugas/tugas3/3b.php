<?php 

function urutanAngka ($angka) {
        $nilai = 1;
        for ($i=0; $i < $angka ; $i++) { 
            for ($j=0; $j <= $i ; $j++) { 
                
                echo "$nilai ";
                $nilai++;
            }
            echo "<br>";
        }
    }

    echo urutanAngka(5);
?>