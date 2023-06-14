<?php 
// ARRAY
// Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$myArray = ['Faris', 27, false, '🗿'];
$binatang = ['🐈', '🐢', '🐎', '🐄', '🐋'];

// Menampilkan isi array
// Mencetak satu elemen pada array menggunakan index
echo $hari[0];
echo "<hr>";

// Mencetak seluruh isi Array
// var_dump, print_r
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<hr>";

// Memanipulasi isi array
// isi elemen menggunakan index nya
$hari[3] = 'Kamis';
print_r($hari);
echo "<br>";

// menambahkan elemen di akhir menggunakan index kosong []
$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo "<br>";

// Menambahkan elemen baru di akhir array menggunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
print_r($bulan);
echo "<hr>";

// Menambahkan elemen baru di awal menggunakan array_unshift()
array_unshift($binatang, '🐍', '🐉');
print_r($binatang);
echo "<hr>";

// Menghapus elemen di akhir array menggunakan array_pop
array_pop($hari);
array_pop($hari);
print_r($hari);
echo "<hr>";

// Menghapus elemen di awal array menggunakan array_shift
array_shift($hari);
print_r($hari);

// 

?>

<?php 
    $mahasiswa = ["ikan"]
?>