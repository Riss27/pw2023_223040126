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
  $deskripsi2  = htmlspecialchars($data['deskripsi2']);
  $provinsi  = htmlspecialchars($data['provinsi']);
  // $gambar  = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
              destinasi
            VALUES
              (null, '$nama', '$deskripsi', '$deskripsi2', '$provinsi', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// cari data
function cari($keyword) {
  $conn = koneksi();

  $query = "SELECT * FROM destinasi
            WHERE 
            nama LIKE '%$keyword%' OR 
            provinsi LIKE '%$keyword%'";
$result = mysqli_query($conn, $query);

$rows = [];
while ($row = mysqli_fetch_assoc($result)){
$rows[] = $row;
}

return $rows;
}

// upload Gambar
function upload(){
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error == 4) {
    // echo "
    // <script>
    //   alert('Pilih gambar terlebih dahulu!');
    // </script>
    // ";
    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file)); 
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "
    <script>
      alert('Yang anda upload bukan gambar!');
    </script>
    ";
    return false;
  }

  // cek tipe file
  if ($tipe_file !== 'image/jpeg' && $tipe_file !== 'image/png' && $tipe_file !== 'image/gif' && $tipe_file !== 'image/webp' && $tipe_file !== 'image/svg' && $tipe_file !== 'image/bmp') {
    echo "
    <script>
      alert('Yang anda upload bukan gambar!');
    </script>
    ";
    return false;
  }

  // cek ukuran file
  if ($ukuran_file > 5000000) {
    echo "
    <script>
      alert('Ukuran gambar terlalu besar!');
    </script>
    ";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmp_file, 'img/' . $nama_file);

  return $nama_file;
}

// hapus data
function hapus($id) {
  $conn = koneksi();

  // hapus gambar di folder img
  $destinasi = query("SELECT * FROM destinasi WHERE id = $id");
  if ($destinasi['gambar'] != 'nophoto.jpg') {
    unlink('img/' . $destinasi['gambar']);
  }

  mysqli_query($conn, "DELETE FROM destinasi WHERE id = $id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data){
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $nama  = htmlspecialchars($data['nama']);
  $deskripsi  = htmlspecialchars($data['deskripsi']);
  $deskripsi2  = htmlspecialchars($data['deskripsi2']);
  $provinsi  = htmlspecialchars($data['provinsi']);
  $gambar_lama  = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if(!$gambar){
    return false;
  }

  if ($gambar == 'nophoto.jpg') {
    $gambar = $gambar_lama;
  }
  
  $query = "UPDATE destinasi SET
              id = '$id',
              nama = '$nama',
              deskripsi = '$deskripsi',
              deskripsi2 = '$deskripsi2',
              provinsi = '$provinsi',
              gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// login
function login($data){

  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if(query("SELECT * FROM user WHERE username = '$username' && password = '$password'")) {
    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => 'Username / Password salah!'
    ];
  }
}

// registrasi
function registrasi($data) {
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // jika username dan password kosong
  if(empty($username) || empty($password) || empty($password2)) {
    echo "<script>
      alert('Username / Password tidak boleh kosong!');
      document.location.href = 'register.php';
    </script>";
    return false;
  }

  // cek username sudah ada atau belum
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
      alert('Username sudah terdaftar!');
      document.location.href = 'register.php';
    </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
      alert('Konfirmasi password tidak sesuai!');
    </script>";
    return false;
  }

  // ketika password kurang dari < 5 digit
  if (strlen($password) < 5) {
    echo "<script>
      alert('password terlalu pendek!');
    </script>";
    return false;
  }

  // username dan password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password, PASSWORD_DEFAULT);
  // tambahkan user baru ke database
  $query = "INSERT INTO user 
            VALUES 
            (null, '$username', '$password')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}