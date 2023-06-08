<?php
require('functions.php');

$title = "Detail Page";

$destinasi = query("SELECT * FROM destinasi");



require('views/detail.view.php');
?>