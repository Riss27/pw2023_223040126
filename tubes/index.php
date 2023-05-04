<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Landing Page</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="index.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary shadow-sm">
      <div class="container">
        <a class="navbar-brand fs-2" href="#">Visit Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto fs-6 text-uppercase">
            <a class="nav-item nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-item nav-link active" href="#">About</a>
            <a class="nav-item nav-link active" href="#">Booking</a>
            <a class="nav-item nav-link btn bg-primary text-white rounded-pill" href="login.php">Login/Register</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Body -->
    <div class="container">
      <p class="fs-5 mt-4">
        Indonesia memiliki banyak destinasi wisata yang menakjubkan. Dari pantai-pantai yang indah, gunung-gunung yang tinggi, hingga tempat-tempat bersejarah yang kaya akan budaya, Indonesia memiliki segalanya untuk memenuhi kebutuhan
        wisatawan.
      </p>
    </div>

    <div class="container py-5">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Feature 1</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget mi quis mi pulvinar blandit eget in lorem. Suspendisse potenti.</p>
            </div>
          </div>
        </div>

        <div class="col-md-8 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Feature 2</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget mi quis mi pulvinar blandit eget in lorem. Suspendisse potenti.</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Feature 3</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget mi quis mi pulvinar blandit eget in lorem. Suspendisse potenti.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <img src="img/kebuntehtambi.jpg" class="card-img-top" alt="kebunteh" style="width: auto; height: auto" />
      <div class="card-body">
        <h5 class="card-title" style="color: darkblue">Perkebunan Teh Tambi</h5>
        <p class="card-text">
          Perkebunan teh Tambi di Wonosobo menawarkan keindahan alam yang menakjubkan dengan pemandangan kebun teh yang hijau dan pegunungan yang indah. Di sini, para petani memetik daun teh dan memprosesnya menjadi teh berkualitas tinggi. Pengunjung dapat menikmati suasana yang tenang, menikmati secangkir teh yang nikmat, serta menikmati pemandangan alam yang memukau. Tempat yang cocok untuk melarikan diri dari kehidupan sehari-hari.
        </p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="img/monas.jpg" class="card-img-top" alt="balipagoda" />
      <div class="card-body">
        <h5 class="card-title">Monumen Nasional <small><i>(monas)</i></small></h5>
        <p class="card-text">
          Monas adalah monumen berdiri bebas tertinggi di Jakarta yang dibangun sebagai simbol kemerdekaan Indonesia. Monas terdiri dari tiang besar yang dikelilingi taman dan kolam, serta museum yang menampilkan artefak sejarah Indonesia. Monas sering dikunjungi oleh turis dan menjadi tempat acara penting di Jakarta.
        </p>
      </div>
    </div>
    <!-- Akhir Body -->

    <!-- Awal Footer -->
    <footer class="bg-dark pt-5 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <h5>About Tourism</h5>
            <p class="text-secondary">Discover new places and explore the world with us.</p>
          </div>
          <div class="col-md-3 col-sm-6">
            <h5>Explore</h5>
            <ul class="list-unstyled">
              <li><a href="#">Destinations</a></li>
              <li><a href="#">Packages</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <h5>Follow Us</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
              </li>
              <li>
                <a href="#"><i class="bi bi-twitter"></i> Twitter</a>
              </li>
              <li>
                <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5 class="text-uppercase mb-4">Contact Us</h5>
            <ul class="list-unstyled">
              <li><i class="fas fa-envelope me-2"></i><a href="mailto:info@visitindonesia.com">info@visitindonesia.com</a></li>
              <li><i class="fas fa-phone-alt me-2"></i>+62 123 456 789</li>
              <li><i class="fas fa-map-marker-alt me-2"></i>Bandung, Indonesia</li>
            </ul>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-md-6 col-sm-12 text-center">
            <p class="text-secondary mb-0">&copy; 2023 Visit Indonesia. All Rights Reserved</p>
          </div>
          <div class="col-md-6 col-sm-12 text-center">
            <ul class="list-unstyled list-inline mb-0">
              <li class="list-inline-item"><a href="#">Terms of Use</a></li>
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
              <li class="list-inline-item"><a href="#">Cookie Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
