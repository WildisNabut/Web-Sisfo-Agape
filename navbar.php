
<?php include("nab.php") ?>
<nav class="navbar bg-white fixed-top">
  <div class="d-flex align-items-center ms-3">
    <i class="fas fa-bars text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="font-size: 24px; cursor: pointer;"></i>
    <span class="ms-2" style="font-size: 18px; font-weight: bold; color: #366273;">SMP KRISTEN AGAPE INDAH</span>
  </div>
  <?php include("nab.php") ?>
  <div class="container-fluid">
  <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">        <div class="offcanvas-header bg-light text-primary">
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $hour = date('H');
            if ($hour >= 5 && $hour < 12) {
                $greeting = "Selamat Pagi";
            } elseif ($hour >= 12 && $hour < 15) {
                $greeting = "Selamat Siang";
            } elseif ($hour >= 15 && $hour < 18) {
                $greeting = "Selamat Sore";
            } else {
                $greeting = "Selamat Malam";
            }
            ?>
            <?php if (empty($_SESSION['username'])): ?>
                <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">Hai!  <?= $greeting; ?>,</h5>
            <?php else: ?>
                <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">
                    <?= $greeting; ?>, <span class="text-warning"><?= htmlspecialchars($_SESSION['username']); ?></span>
                </h5>
            <?php endif; ?>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2 rounded-pill" type="search" placeholder="Cari sesuatu..." aria-label="Search">
                <button class="btn btn-primary rounded-pill px-4" type="submit">Cari</button>
            </form>
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 mt-4">
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="index.php"><i class="fas fa-home"></i> Beranda</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-info-circle"></i> Informasi
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="pengumuman.php"><i class="fas fa-bullhorn"></i> Pengumuman</a></li>
                      <li><a class="dropdown-item" href="kegiatan.php"><i class="fas fa-calendar-alt"></i>Berita</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdownGallery" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-images"></i> Galeri
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownGallery">
                      <li><a class="dropdown-item" href="foto.php"><i class="fas fa-camera"></i> Foto</a></li>
                      <li><a class="dropdown-item" href="galeri_vidio.php"><i class="fas fa-video"></i> Video</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="renungan.php"><i class="fas fa-book"></i> Renungan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="fasilitas.php"><i class="fas fa-building"></i> Fasilitas</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdownSchoolProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-school"></i> Profil Sekolah
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownSchoolProfile">
                      <li><a class="dropdown-item" href="sejarah.php"><i class="fas fa-history"></i> Sejarah</a></li>
                      <li><a class="dropdown-item" href="profile_sekolah.php"><i class="fas fa-bullseye"></i> Visi dan Misi</a></li>
                      <li><a class="dropdown-item" href="struktur-organisasi.php"><i class="fas fa-users"></i> Organisasi</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="kontak2.php"><i class="fas fa-phone"></i> Kontak</a>
              </li>
          </ul>
        </div>
    </div>
  </div>
</nav>

<style>
    /* Mengurangi lebar offcanvas */
.custom-offcanvas {
    width: 10px; /* Ubah sesuai dengan lebar yang diinginkan */
}
@media (max-width: 768px) {
    .custom-offcanvas {
        width: 200px; /* Lebar untuk perangkat kecil */
    }
}

.navbar-nav .nav-link {
    position: relative;
    font-weight: bold;
    padding-left: 35px; /* Memberikan ruang untuk ikon dan teks */
    transition: color 0.3s ease; /* Animasi untuk efek hover */
}

.navbar-nav .nav-link i {
    position: absolute;
    left: 10px; /* Menempatkan ikon di kiri */
    top: 50%;
    transform: translateY(-50%);
}

.navbar-nav .nav-link span {
    padding-left: 30px; /* Jarak antara ikon dan teks */
}

/* Warna hover kuning telur */
.navbar-nav .nav-link:hover {
    color: #ffc107; /* Kuning telur */
}

/* Dropdown menu */
.navbar-nav .dropdown-menu {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.navbar-nav .dropdown-menu .dropdown-item:hover {
    background-color: #f1f1f1; /* Warna latar saat item di-hover */
}

.navbar-nav .dropdown-menu i {
    margin-right: 10px; /* Memberi jarak antara ikon dan teks */
}

</style>