<?php
require('functions.php');

$title = "Home Page";

$destinations = query("SELECT * FROM destinasi");

require('views/index.view.php');
?>