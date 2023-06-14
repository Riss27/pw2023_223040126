<?php 
    $rLuas = 10;
    $rKeliling = 20;

    function hitungLuasLingkaran($rLuas) {
        return 3.14 * $rLuas * $rLuas;
    }

    echo "<b>Menghitung Luas Lingkaran</b><br><br>";
    echo "Jari-jari = $rLuas cm.<br>";
    echo "Luas Lingkaran = " . hitungLuasLingkaran($rLuas) . " cm2";
    
    echo "<hr>";
    
    function hitungKelilingLingkaran($rKeliling) {
        return 2 * 3.14 * $rKeliling;
    }
    
    echo "<b>Menghitung Keliling Lingkaran</b><br><br>";
    echo "Jari-jari = $rKeliling cm.<br>";
    echo "Keliling Lingkaran = " . hitungKelilingLingkaran($rKeliling) . " cm";
    
    ?>
