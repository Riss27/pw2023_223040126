<?php require('views/partials/header.php'); ?>

<?php require('views/partials/nav.php'); ?>

<!-- Awal Body -->

<div class="container">
  <div class="row">
    <div class="col-md-6 my-5 d-flex align-items-center">
      <div class="text-center justify-content-center w-100">
        <h1>Welcome to Indonesia Tourism</h1>
        <p>Discover the Beauty of Indonesia</p>
      </div>
    </div>
    <div class="col-md-6 my-5">
      <img src="img/banner-img.jpg" class="w-100 rounded" alt="#">
    </div>
  </div>
</div>



<!-- Isi -->
<div class="container col-md-8 mt-5 mb-4">
  <h1 class="text-center fs-1">Best Place To Visit</h1>
</div>

  <div class="container col-md-8 mb-5 pb-3">
    <form action="" method="get">
      <div class="input-group my-3">
        <input type="search" class="form-control" placeholder="Search Destination(s) by Provinsi..." name="keyword" id="keyword" autofocus autocomplete="off" >
        <button class="btn btn-outline-primary btn-warning text-light button-search" type="submit" name="button-search" id="button-search"><i class="bi bi-search"></i></button>
    </form>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4" id="search-container">
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
                    <a href="#" class="btn btn-warning">Book Now (belum work)</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
  </div>
</div>
    <!-- Akhir Isi -->

    <!-- Akhir Body -->

    
<?php require('views/partials/footer.php'); ?>