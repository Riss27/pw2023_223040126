<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require('functions.php');

$title = "Home Page";

$destinations = query("SELECT * FROM destinasi");

if (isset($_GET['button-search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
                        destinasi 
                        WHERE 
                        nama LIKE '%$keyword%' OR
                        deskripsi LIKE '%$keyword%' OR
                        provinsi LIKE '%$keyword%'
                        ";
    $destinations = query($query);
} else {
    $destinations = query("SELECT * FROM destinasi");
}

require('views/index.view.php');
?>