<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require('functions.php');

$id = $_GET['id'];

$destinations = query("SELECT * FROM destinasi WHERE id = $id")[0];

$title = "Detail Page";


require('views/detail.view.php');
?>