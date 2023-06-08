<?php require('views/partials/header.php'); ?>

<?php require('views/partials/nav.php'); ?>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="text-center mb-4">
        <h1 class="display-4">Welcome to</h1>
        <h1 class="display-3 fw-bold">Admin Page</h1>
      </div>
    </div>
  </div>

  <div class="row justify-content-center mt-5">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card bg-dark text-white border-light shadow">
        <div class="card-header bg-transparent">
          <i class="bi bi-pencil-fill"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Edit Data</h5>
          <a href="edit.php" class="btn btn-primary">Click Here</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card bg-dark text-white border-light shadow">
        <div class="card-header bg-transparent">
          <i class="bi bi-calendar-check-fill"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Booking</h5>
          <a href="#" class="btn btn-primary">Click Here</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card bg-dark text-white border-light shadow">
        <div class="card-header bg-transparent">
          <i class="bi bi-gear-fill"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Setting</h5>
          <a href="#" class="btn btn-primary">Click Here</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card bg-dark text-white border-light shadow">
        <div class="card-header bg-transparent">
          <i class="bi bi-arrow-left"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Go Back</h5>
          <a href="index.php" class="btn btn-primary">Click Here</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('views/partials/footer.php');?>
