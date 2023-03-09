<?php 
$perangkat = ['Motherboard', 'Processor', 'Hardisk', 'PC Coller', 'VGA Card', 'SSD'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
    <p><b>Macam-macam perangkat keras komputer</b></p>
    <ol>
        <?php foreach($perangkat as $p) { ?>
        <li><?= $p; ?></li>
        <?php } ?>  
    </ol>
    <p><b>Macam-macam perangkat keras komputer baru</b></p>
    <ol>
        <?php
        array_unshift($perangkat, 'Card Reader', 'Modem');
        sort($perangkat);
        foreach($perangkat as $p) { ?>
        <li><?= $p; ?></li>
        <?php } ?> 
    </ol>
</body>
</html>