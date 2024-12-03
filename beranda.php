<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Kiri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <!-- Tombol Hamburger -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Tombol Masuk -->
      <?php include ('nab.php'); ?>

  <!-- Offcanvas Navbar -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-start flex-grow-1">
        <li class="nav-item">
          <a class="nav-link" href="Beranda.html">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
            <li><a class="dropdown-item" href="#">Kegiatan Sekolah</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Galeri.html">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Fasilitas.html">Fasilitas</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil Sekolah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="struktur-organisasi.html">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="visi-misi.html">Visi Misi</a></li>
              <li><a class="dropdown-item" href="sejarah.html">Sejarah Sekolah</a></li>
            </ul>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="Kontak.html">Kontak</a>
        </li>
      </ul>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
