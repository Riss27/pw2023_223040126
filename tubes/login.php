<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require('functions.php');

$title = "Login Page";

if(isset($_POST['login'])) {
    $login = login($_POST);
}

require('views/login.view.php');
?>