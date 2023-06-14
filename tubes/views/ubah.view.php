<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center">Ubah Data Destinasi</h1>
          <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $d["id"]; ?>">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= $d["nama"]; ?>" autofocus required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi 1</label>
              <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $d["deskripsi"]; ?>" autofocus>
            </div>
            <div class="mb-3">
              <label for="deskripsi2" class="form-label">Deskripsi 2</label>
              <input type="text" class="form-control" name="deskripsi2" id="deskripsi2" value="<?= $d["deskripsi2"]; ?>" autofocus>
            </div>
            <div class="mb-3">
              <label for="provinsi" class="form-label">Provinsi</label>
              <input type="text" class="form-control" name="provinsi" id="provinsi" value="<?= $d["provinsi"]; ?>" autofocus>
            </div>
            <div class="mb-3">
                <input type="hidden" name="gambar_lama" value="<?= $d["gambar"]; ?>">
              <label for="gambar" class="form-label">Gambar</label>
              <div class="input-group">
                <input type="file" class="form-control gambar me-3" name="gambar" id="gambar" value="<?= $d["gambar"]; ?>" onchange="previewImage()">
              </div>
              <div class="text-center mt-3">
                <img src="img/<?= $d["gambar"]; ?>" alt="#" class="img-preview card-img-top rounded">
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" type="submit" name="tambah">Ubah Data</button>
              <a class="btn btn-danger" href="hapus.php?id=<?= $d['id']; ?>">
                <i class="bi bi-trash"></i> Hapus
              </a> 
              <a class="btn btn-secondary" href="javascript:history.back()">Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('partials/footer.php'); ?>
