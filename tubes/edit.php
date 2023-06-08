<?php 

    require('functions.php');

    $tittle = 'Form Edit Data';

    $destinasi = query("SELECT * FROM destinasi");

    require('views/edit.view.php');
?>