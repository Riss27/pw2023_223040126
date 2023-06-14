<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

    require('functions.php');

    $title = 'Form Edit Data';

    $destinasi = query("SELECT * FROM destinasi");

    if (isset($_POST['cari'])) {
        $destinasi = cari($_POST['keyword']);
    }

    require('views/edit.view.php');
?>