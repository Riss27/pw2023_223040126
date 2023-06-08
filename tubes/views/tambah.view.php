<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center">Tambah Data Destinasi</h1>
          <form action="" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Destinasi</label>
              <input type="text" class="form-control" name="nama" id="nama" autofocus required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="text" class="form-control" name="gambar" id="gambar" required>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php require('partials/footer.php'); ?>