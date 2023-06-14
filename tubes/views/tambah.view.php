<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center text-light bg-dark rounded my-4">Tambah Data Destinasi</h1>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Destinasi</label>
              <input type="text" class="form-control" name="nama" id="nama" autofocus required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi 1</label>
              <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="deskripsi2" class="form-label">Deskripsi 2</label>
              <textarea class="form-control" name="deskripsi2" id="deskripsi2" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="provinsi" class="form-label">Provinsi</label>
              <textarea class="form-control" name="provinsi" id="provinsi" required></textarea>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">
                Gambar
                <input type="file" class="form-control gambar" name="gambar" id="gambar" onchange="previewImage()">
              </label>
              <div class="text-center">
                <img src="img/nophoto.jpg" alt="#" class="img-preview card-img-top rounded">
              </div>
            </div>
            <div class="card-footer text-center bg-dark rounded my-4">
              <button class="btn btn-primary btn-block" type="submit" name="tambah">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('partials/footer.php'); ?>
