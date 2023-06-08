<?php require('views/partials/header.php'); ?>

<?php require('views/partials/nav.php'); ?>

<section class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center mb-5" style="background-image: url(img/banner-img.jpg);">

  <div class="container my-auto ms-auto" >
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Form Login -->
        <div class="card">
          <div class="card-header">
            <h3 class="text-center text-primary">Login</h3>
          </div>
          <div class="card-body">
            <form action="process_login.php" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="mb-3">
                <p class="text-center">Belum punya akun? <a href="register.php">Sign Up</p>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php require('views/partials/footer.php'); ?>
