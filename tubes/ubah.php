<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require('functions.php');

$tittle = 'Form Tambah Data';

// ambil data di URL
$id = $_GET["id"];

// query data destinasi berdasarkan id
$d = query("SELECT * FROM destinasi WHERE id = $id")[0];

// inser data jika tombol di klick
if(isset($_POST['tambah'])) {
    // tampilkan pesan jika data berhasil di tambahkan
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Baik, Data Berhasil diubah!');
        document.location.href  = 'edit.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal diubah!');
        document.location.href  = 'tambah.php';
        </script>";
    }
}

require('views/ubah.view.php');
?>