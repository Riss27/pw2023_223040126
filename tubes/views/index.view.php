<?php require('views/partials/header.php'); ?>

<?php require('views/partials/nav.php'); ?>

<!-- Awal Body -->


<section class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center mb-5" style="background-image: url(img/index.jpg);">
  <div class="content text-center text-light">
    <h1 class="text-center">Explore the Beauty of Indonesia</h1>
    <p class="text-center">Discover amazing destinations and create unforgettable memories</p>
  </div>
</section>

    
    <!-- Awal Carousel -->
    
    <!-- Akhir Carousel -->

    <!-- Isi -->

    <div class="container mt-5 mb-4" data-aos="fade-right">
      <h1 class="fs-1">Best Place To Visit</h1>
    </div>

    <div class="container mb-5 pb-3" data-aos="zoom-in-right">
      <div class="row">
        <?php foreach($destinations as $d) : ?>
        <div class="col-md-4">
          <div class="d-flex flex-column h-100">
            <div class="ratio ratio-4x3">
              <img src="img/<?= $d['gambar']; ?>" data-aos="fade-up" class="img-fluid rounded" alt="Pandawa Bali" />
            </div>
            <h3 class="text-center mt-3" data-aos="fade-up"><?= $d['nama']; ?></h3>
            <p data-aos="zoom-in"><?= $d['deskripsi']; ?></p>
            <div class="mt-auto text-center">
              <a href="detail.php" data-aos="fade-right" class="btn btn-primary mb-5">Lihat Detail</a>
              <a href="admin.php" data-aos="fade-left" class="btn btn-primary mb-5">Book Now</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- Akhir Isi -->

    <!-- Akhir Body -->

<?php require('views/partials/footer.php'); ?>