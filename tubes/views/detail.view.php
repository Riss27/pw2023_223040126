<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="backdrop-filter: blur(8px);">
                <div class="row g-0">
                    <div class="col-md-6 d-flex justify-content-center align-items-center position-relative">
                        <img src="img/<?= $destinations['gambar']; ?>" class="card-img-top rounded ms-4 my-4" alt="#">
                        <div class="card-img-overlay" ></div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body ms-4 my-auto">
                            <h2 class="card-title text-primary"><?= $destinations['nama']; ?></h2>
                            <h4 class="card-text text-danger">Location: <i><?= $destinations['provinsi']; ?></i></h4>
                            <p class="card-text"><?= $destinations['deskripsi2']; ?></p>
                            <a href="index.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.php'); ?>