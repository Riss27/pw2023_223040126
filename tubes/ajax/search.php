<?php 
require '../functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
                    destinasi 
                    WHERE
                    provinsi LIKE '%$keyword%'
                    ";
$destinations = query($query);
?>
<?php foreach ($destinations as $d) : ?>
    <div class="col">
        <div class="card h-100">
            <img src="img/<?= $d['gambar']; ?>" style="object-fit: cover; aspect-ratio: 4/3" class="card-img-top" alt="#">
            <div class="card-body">
                <h5 class="card-title"><?= $d['nama']; ?></h5>
                <p class="card-text"><?= $d['deskripsi']; ?></p>
            </div>
            <div class="card-footer text-center">
                <div class="d-grid gap-2">
                    <a href="detail.php?id=<?= $d['id']; ?>" class="btn btn-primary">Lihat Detail</a>
                    <a href="admin.php" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
