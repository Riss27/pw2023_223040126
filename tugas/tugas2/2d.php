<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
</head>
<body>
    <table width=150px cellspacing=0px cellpadding=0px border=1px>
        <?php 
            for ($baris=1; $baris <=5 ; $baris++) { 
                echo "<tr>";
                for ($kolom=1; $kolom <=5 ; $kolom++) { 
                    $total=$baris+$kolom;
                    if ($total % 2 == 0) {
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                    } else {
                        echo "<td height=30px width=30px bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>