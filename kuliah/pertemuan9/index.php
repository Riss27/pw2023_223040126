<!-- Awal Data Mahasiswa -->
<?php
    require('functions.php');
    $tittle = 'Home';
    $students = [
      [
        "nama" => "Muhammad Faris Fathur Rohman",
        "npm" => "223040126",
        "email" => "farisfathur@unpas.ac.id"
      ],
      [
        "nama" => "Fawwas Nawwaf Sabil",
        "npm" => "223040114",
        "email" => "fawwasnawwaf@gmail.com"
      ]
      ];

      // echo $_SERVER["REQUEST_URI"];
      // /pw2023_223040126/kuliah/pertemuan9/

    require('views/index.view.php');
    ?>
    <!-- Akhir Data Mahasiswa -->