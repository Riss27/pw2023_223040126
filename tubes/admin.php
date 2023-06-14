<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require('functions.php');

$title = "Admin Page";

require('views/admin.view.php');
?>