<?php 
define('BASE_URL', '/pw2023_223040126/kuliah/pertemuan9/');

function checkActive($uri) {
    return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '';
}

?>