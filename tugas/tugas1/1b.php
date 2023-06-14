<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1b</title>
</head>
<body>

    <?php
        $npm = 26;
    ?>

    <p>
        <?php echo "Aku adalah angka <b>$npm</b>"; ?>
        <br>
        <?php 
        $npm = $npm+5;
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$npm</b>"; 
        ?>
        <br>
        <?php
        $npm = $npm+5/2;
        echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>$npm</b>"; 
        ?>
        <br>
        <?php
        $npm = $npm+5/2+75;
        echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$npm</b>"; 
        ?>
        <br>
        <?php
        $npm = $npm+5/2+75-20;
        echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>$npm</b>";
        ?>
    </p>
    
</body>
</html> 