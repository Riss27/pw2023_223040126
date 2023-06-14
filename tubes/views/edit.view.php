<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container my-5">
  <h1 class="text-center">DATA DESTINASI</h1>
  <hr>
  <a href="tambah.php" class="btn btn-primary">Tambah Data Destinasi</a>
  <br>
  
  <div class="row">
    <div class="col-md-12">
      <form action="" method="POST">
      <div class="input-group my-3">
        <input type="search" class="form-control" placeholder="Search destination(s)..." name="keyword" id="keyword" autofocus autocomplete="off" >
        <button class="btn btn-outline-secondary btn-primary text-light" type="submit" name="cari" id="button-search"><i class="bi bi-search"></i></button>
      </div>
      </form>
    </div>
  </div>


  <div class="search-container">
    <?php if ($destinasi) : ?>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi 1</th>
            <th scope="col">Deskripsi 2</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($destinasi as $d) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $d['nama']; ?></td>
              <td><?= $d['deskripsi']; ?></td>
              <td><?= $d['deskripsi2']; ?></td>
              <td><?= $d['provinsi']; ?></td>
              <td>
                <img src="img/<?= $d['gambar']; ?>" width="200" alt="<?= $d['nama']; ?>">
              </td>
              <td>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-warning me-2" href="ubah.php?id=<?= $d['id']; ?>">
                    <i class="bi bi-pencil"></i> Edit
                  </a>
                  <a class="btn btn-danger" href="hapus.php?id=<?= $d['id']; ?>">
                    <i class="bi bi-trash"></i> Hapus
                  </a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else : ?>
      <div class="row">
        <div class="col-md-6">
          <div class="alert alert-danger" role="alert">
            Destination(s) not found!
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php require('partials/footer.php'); ?>
