<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Kiri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Untuk membuat navbar lebih responsif */
    .navbar-nav {
      flex-direction: row;
    }

    /* Mengatur navbar brand dan tombol toggle pada layar kecil */
    @media (max-width: 767.98px) {
      .navbar-toggler {
        order: -1; /* Memindahkan tombol toggle ke sebelah kiri */
      }

      .navbar-brand {
        flex-grow: 1;
        text-align: center;
      }
    }

    /* Memastikan tombol login tetap di kanan pada semua ukuran layar */
    .login-button {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
    }

    /* Tombol login disembunyikan di layar besar */
    @media (min-width: 768px) {
      .login-button {
        display: block;
      }
    }

    /* Tombol login muncul di layar kecil juga */
    @media (max-width: 767.98px) {
      .login-button {
        display: block;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <!-- Tombol toggle dan logo dalam satu baris -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Logo di sebelah tombol toggle -->
      <a class="navbar-brand" href="#">Logo</a>

      <!-- User login di kanan (tampil di semua ukuran layar) -->
      <div class="login-button">
        <button class="btn btn-outline-primary">Login</button>
      </div>

      <!-- Offcanvas menu -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

  <!-- Konten utama -->
  <div class="container mt-5 pt-5">
    <h1>Selamat datang di Halaman Beranda</h1>
    <p>Konten halaman beranda akan ditampilkan di sini.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>