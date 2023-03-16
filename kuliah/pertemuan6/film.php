<?php 
$film = [
        [
        "judul" => "Avanger Endgame", 
        "tahun" => "2019", 
        "genre" => ["Action, ", "Advanture, ", "Drama"],
        "sutradara" =>[ "Antony Russo dan ", "Joe Russo"], 
        "pemeran utama" => ["Robert Downey Jr, ", "Christ Evans, ", "Mark Ruffalo"],
        "poster" => "endgame.png"
        ],
        [
        "judul" => "Pacific Rim", 
        "tahun" => "2013", 
        "genre" => ["Action", "Advanture", "Sci-Fi"],
        "sutradara" => ["Guillermo del Toro"], 
        "pemeran utama" => ["Idris Elba, ", "Charlie Hunnam, ", "Rinko Kukuchi"],
        "poster" => "pacific.png"
        ],
        [
        "judul" => "Despicable Me", 
        "tahun" => "2010", 
        "genre" => ["Animation, ", "Adventure, ", "Comedy"],
        "sutradara" => ["Pierre Coffin, ", "Ken Daurio, ", "Sergio Pablos"], 
        "pemeran utama" => ["Steve Carell, ", "Jason Segel, ", "Russel Brand" ],
        "poster" => "minion.png"
        ],
        [
        "judul" => "Cars", 
        "tahun" => "2006", 
        "genre" => ["Animation, ", "Adventure, ", "Comedy"],
        "sutradara" => ["John Lasseter, ", "Joe Ranft, "],
        "pemeran utama" => ["Owen Wilson, ", "Bonnie Hunt, ", "Paul Newman"], 
        "poster" => "cars.png"
        ],
        [
        "judul" => "Assasin's Creed", 
        "tahun" => "2016", 
        "genre" => ["Action,  ", "Adventure,  ", "Sci-Fi"],
        "sutradara" => ["Justin Kurzel"], 
        "pemeran utama" => ["Michael Fassbender, ", "Marion Cotillard, ", "Jeremy Irons"],
        "poster" => "asasin.png"
        ],
        [
        "judul" => "Shazam!", 
        "tahun" => "2019", 
        "genre" => ["Action, " , "Adventure, ", "Comedy"],
        "sutradara" => ["David F. Sandberg"], 
        "pemeran utama" => ["Zachary Levi, ", "Mark Strong, ", "Asher Angel"],
        "poster" => "shazam.png"
        ],
    ];
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Film</title>
        <style>
            img {
                aspect-ration: 1;
                width: 256px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <h1>Daftar Film</h1>
        <?php foreach( $film as $flm ) : ?>
        <ul>
            <li><img src="img/<?= $flm["poster"]; ?>"</li>
            <li>Judul : <?= $flm["judul"] ?></li>
            <li>Tahun : <?= $flm["tahun"] ?></li>
            <li>Genre : 
                <?php foreach( $flm["genre"] as $g) :
                    echo $g ?>
                    <?php endforeach ?>
            </li>
            <li>Sutradara : 
            <?php foreach( $flm["sutradara"] as $s) :
                    echo $s ?>
                    <?php endforeach ?>
            </li>
            <li>Pemeran Utama : 
            <?php foreach( $flm["pemeran utama"] as $pu) :
                    echo $pu ?>
                    <?php endforeach ?>
            </li>
        </ul>
        <?php endforeach ?>

    </body>
    </html>