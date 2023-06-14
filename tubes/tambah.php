<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require('functions.php');

$tittle = 'Form Tambah Data';

// inser data jika tombol di klick
if(isset($_POST['tambah'])) {
    // tampilkan pesan jika data berhasil di tambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Baik, Data Berhasil Ditambahkan!');
        document.location.href  = 'edit.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href  = 'tambah.php';
        </script>";
    }
}

require('views/tambah.view.php');
?>