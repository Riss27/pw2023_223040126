<?php 
$mahasiswa = [
        [
        "nama" => "Muhammad Faris Fathur Rohman", 
        "nrp" => "223040126", 
        "email" => "faris.223040126@mail.unpas.ac.id",
        "jurusan" => "Teknik Infomatika", 
        "gambar" => "me.jpg"
        ],
        [
        "nama" => "Muhammad Husna Fathur Rohman", 
        "nrp" => "223040002", 
        "email" => "husna@gmail.com",
        "jurusan" => "Teknik Industri", 
        "gambar" => "husnaa.jpeg"
        ],
        [
        "nama" => "Muhammad Gabriel Situmangsa", 
        "nrp" => "223040098", 
        "email" => "gabriel@gmail.com",
        "jurusan" => "Teknik Pangan", 
        "gambar" => "gabriell.jpeg"
        ],
        [
        "nama" => "Ezio Auditore", 
        "nrp" => "223040099", 
        "email" => "ezio@gmail.com",
        "jurusan" => "Teknik Mesin", 
        "gambar" => "ezio.jpeg"
        ],
        [
        "nama" => "Tony Stark", 
        "nrp" => "223040011", 
        "email" => "tonystark1@gmail.com",
        "jurusan" => "Teknik Infomatika", 
        "gambar" => "ironmen.jpeg"
        ],
        [
        "nama" => "Leonardo da Vinci", 
        "nrp" => "223040002", 
        "email" => "ezio@gmail.com",
        "jurusan" => "Desain Komunikasi Visual", 
        "gambar" => "davincii.jpeg"
        ],
        [
        "nama" => "Cristiano Ronaldo", 
        "nrp" => "223040200", 
        "email" => "ezio@gmail.com",
        "jurusan" => "Pendidikan Olahraga", 
        "gambar" => "ronaldoo.jpeg"
        ],
        [
        "nama" => "Rick Sanchez", 
        "nrp" => "223040101", 
        "email" => "rick@gmail.com",
        "jurusan" => "Fisika", 
        "gambar" => "rickk.jpeg"
        ],
        [
        "nama" => "Saitama", 
        "nrp" => "223040001", 
        "email" => "saitama@gmail.com",
        "jurusan" => "Teknik Mesin", 
        "gambar" => "saitamaa.jpeg"
        ],
        [
        "nama" => "Dodit Gus Rohman", 
        "nrp" => "223040006", 
        "email" => "dodit@gmail.com",
        "jurusan" => "Perancangan Wilayah dan Kota", 
        "gambar" => "doditt.jpeg"
        ]
    ];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tugas 5 a</title>
        <style>
            img {
                aspect-ratio: 1;
                width: 256px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <h2>Daftar Mahasiswa</h2>
        <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"</li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NRP : <?= $mhs["nrp"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        </ul>
        <?php endforeach ?>

    </body>
    </html>