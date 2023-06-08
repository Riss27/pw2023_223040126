<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<section class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center mb-5" style="background-image: url(img/banner-img.jpg);">

<div class="container mx-auto my-auto">
  <div class="row justify-content-center">
    <div class="col-md-6">
      
      <!-- Form Registrasi -->
      <div class="card">
        <div class="card-header">
          <h3 class="text-center text-primary">Registrasi</h3>
        </div>
        <div class="card-body">
          <form action="process_registration.php" method="POST">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
              <label for="password_confirm" class="form-label">Konfirmasi Password</label>
              <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
            </div>
            <div class="d-grid">
              <a href="index.php" type="submit" class="btn btn-primary">Submit</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</section>

<?php require('partials/footer.php'); ?>
