<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-5">
    <h1 class="text-center">DATA DESTINASI</h1>
    <hr>
    <a href="tambah.php" class="btn btn-primary">Tambah Data Destinasi</a>
    <hr>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
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
            <td>
              <img src="img/<?= $d['gambar']; ?>" width="100" alt="<?= $d['nama']; ?>">
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
          <!-- tambahkan baris lain untuk data destinasi -->
        </tbody>
      </table>
    </div>
  </div>


<?php require('partials/footer.php'); ?>