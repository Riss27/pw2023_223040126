<?php require('partials/header.php'); ?>

<div class="container position-absolute top-50 start-50 translate-middle">
  <div class="row my-auto justify-content-center">
    <div class="col-md-6">
      <?php if (isset($register['error'])) : ?>
      <p style="color: red; font-style: italic"><?= $register['pesan']; ?></p>
      <?php endif ?>
      <form action="" method="POST">
        <div class="card" style="background-color: #121212;">
          <div class="card-header">
            <h1 class="text-center text-danger">Register</h1>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="username" class="form-label">Username:</label>
              <input type="text" class="form-control" id="username" name="username" autofocus autocomplete="off" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
              <label for="password2" class="form-label">Konfirmasi Password:</label>
              <input type="password" class="form-control" id="password2" name="password2" required>
            </div>
            <div class="d-grid">
              <button type="submit" name="register" class="btn btn-danger">Register!</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

