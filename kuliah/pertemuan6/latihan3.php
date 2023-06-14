<?php 
// Array Assosiative
// Array yg indexnya adalah string yg kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Faris", 
        "makanan" => ["🍳", "🍇"], 
        "peliharaan" => "🐈"
    ],
    [
        "nama" => "Fawas", 
        "makanan" => ["🍚"], 
        "peliharaan" => "🐢"
    ],
    [
        "nama" => "Reza", 
        "makanan" => ["🍟","🌭", "🍜"], 
        "peliharaan" => "🐎"
    ],
    [
        "nama" => "Azhar", 
        "makanan" => [], 
        "peliharaan" => "🐄"
    ],
    [
        "nama" => "Udin", 
        "makanan" => ["🥪"], 
        "peliharaan" => "🐋"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>  

    <?php foreach($mahasiswa as $mhs) : ?>  
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?> </li>
        <li>Makanan Favorit : 
            <?php foreach( $mhs["makanan"] as $m) {
                echo $m;
            } ?>
        </li>
        <li>Peliharaan : <?= $mhs["peliharaan"]; ?> </li>
    </ul>
    
    <?php endforeach ?>

</body>
</html>