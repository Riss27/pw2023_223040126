<?php require('views/partials/header.php'); ?>

  <div class="container position-absolute top-50 start-50 translate-middle" >
    <div class="row my-auto justify-content-center">
      <div class="col-md-6">
        <?php if (isset($login['error'])) : ?>
        <p style="color: red; font-style: italic"><?= $login['pesan']; ?></p>
        <?php endif ?>
        <form action="" method="POST">
        <div class="card" style="background-color: #121212;">
          <div class="card-header">
            <h1 class="text-center text-primary">Login</h1>
          </div>
          <div class="card-body">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" autofocus autocomplete="off" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="mb-3 d-flex justify-content-center align-items-center">
                <p class="mb-0 me-2">Belum punya akun?</p>
                <a href="register.php" class="btn btn-primary rounded-pill">Register</a>
              </div>


              <div class="d-grid">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
              </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
