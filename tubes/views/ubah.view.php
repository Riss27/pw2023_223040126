<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center">Ubah Data Destinasi</h1>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $d["id"];?>"> 
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $d["nama"];?>" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $d["deskripsi"];?>" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $d["gambar"];?>" autofocus required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit" name="tambah">Ubah Data</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require('partials/footer.php'); ?>