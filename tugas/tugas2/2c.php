<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <style>
        .box {
        width: 40px;
        aspect-ratio: 1;
        background-color: navajowhite;
        text-align: center;
        line-height: 40px;
        border: 1px solid salmon;
       }
       .box-wrapper {
        display: flex;
       }
    </style>
</head>
<body>
<?php 
    for ($i=10; $i >= 1 ; $i--) {
        echo "<div class=\"box-wrapper\">";
        for ($j=1; $j <= $i ; $j++) { 
        echo "<div class=\"box\">$j</div>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>