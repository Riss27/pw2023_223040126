<?php
// koneksi database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tourwave');
}

function query($query)
{
  $conn = koneksi(); 

  $result = mysqli_query($conn, $query);
  
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}

return $rows;
}

// Tambah Data
function tambah($data) {
  $conn = koneksi();
  $nama  = htmlspecialchars($data['nama']);
  $deskripsi  = htmlspecialchars($data['deskripsi']);
  $gambar  = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO 
              destinasi
            VALUES
              (null, '$nama', '$deskripsi', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id) {
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM destinasi WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data){
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $nama  = htmlspecialchars($data['nama']);
  $deskripsi  = htmlspecialchars($data['deskripsi']);
  $gambar  = htmlspecialchars($data['gambar']);
  
  $query = "UPDATE destinasi SET
              id = '$id',
              nama = '$nama',
              deskripsi = '$deskripsi',
              gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);

}