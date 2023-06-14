<?php
  session_start();
  if (isset($_SESSION['login'])) {
      header("Location: login.php");
      exit;
  }

require('functions.php');

$title = "Registrasi Page";

$conn = koneksi();

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
        alert('user baru berhasil ditambahkan!');
        document.location.href = 'login.php';
      </script>";
  } else {
    echo mysqli_error($conn);
  }

}

require('views/register.view.php');
?>