<?php require('views/partials/header.php'); ?>

<?php require('views/partials/nav.php'); ?>

<div class="container" style="height: 85vh;">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-8">
      <div class="text-center mb-4">
        <h1 class="display-4 fw-bold">Welcome</h1>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-lg-4">
          <div class="card bg-dark text-white border-light shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
              <a href="edit.php" class="btn btn-link text-light btn-lg">
                <i class="bi bi-pencil-fill" style="font-size: 4rem;"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card bg-dark text-white border-light shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
              <a href="#" class="btn btn-link text-light btn-lg">
                <i class="bi bi-calendar-check-fill" style="font-size: 4rem;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-md-6 col-lg-4">
          <div class="card bg-dark text-white border-light shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
              <a href="#" class="btn btn-link text-light btn-lg">
                <i class="bi bi-gear-fill" style="font-size: 4rem;"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card bg-dark text-white border-light shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
              <a href="index.php" class="btn btn-link text-light btn-lg">
                <i class="bi bi-arrow-left" style="font-size: 4rem;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('views/partials/footer.php');?>
