<?php 
require('functions.php');

$tittle = 'Form Tambah Data';

// inser data jika tombol di klick
if(isset($_POST['tambah'])) {
    // tampilkan pesan jika data berhasil di tambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Mantap, Data Udah masuk bwangg!');
        document.location.href  = 'index.php';
        </script>";
    }
}

require('views/tambah.view.php');
?>