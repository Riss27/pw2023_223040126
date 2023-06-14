<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan2</title>
</head>
<body>
    <h1>
        <?php echo 'Hello, World!'; ?>
    </h1>
    <p>
        <?php echo 'Pemrograman web' ?>
    </p>
    <p>
        <?php echo "Jum'at" ?>
    </p>
    <p>
        <?php echo "\"PENGUMUMAN\" : hari Jum'at Libur!"; ?>
    </p>
    <p>
    <p>
        <?php echo '"PENGUMUMAN"' . " : hari Jum'at Libur!"; ?>
    </p>
    <hr>

    <?php 
        $nama_depan = 'Faris';
        $nama_belakang = 'Rohman';
    ?>

    <h2>
        <i><?php echo "Hello, $nama_depan $nama_belakang!" ?></i>   
    </h2>

</body>
</html>