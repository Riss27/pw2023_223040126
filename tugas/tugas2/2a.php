<?php 
$faris = "Faris";
$rohman = "Rohman";

for ($angka = 1; $angka <= 100 ; $angka++) { 
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "$faris $rohman <br>";
    } 
    elseif ($angka % 3 == 0) {
        echo "$faris <br>";
    }
    elseif ($angka % 5 == 0) {
        echo "$rohman <br>";
    } else {
        echo "$angka <br>";
    }
}
?>