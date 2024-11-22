
<?php include("nab.php") ?>
<nav class="navbar bg-white fixed-top">
        <div class="d-flex align-items-center ms-3">
            <i class="fas fa-bars text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="font-size: 24px; cursor: pointer;"></i>
            <!-- Gantikan span dengan gambar -->
            <img src="images/logo_agape.png" alt="Gambar Sekolah" class="img-fluid full-width-image">
            <img src="beranda_image/log.png" alt="Gambar Sekolah" class="img-fluid full-width-img">
            </div>
  <?php include("nab.php") ?>
  <div class="container-fluid">
  <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">        <div class="offcanvas-header bg-light text-primary">
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $hour = date('H');
            if ($hour >= 5 && $hour < 11) {
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

              <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdownSchoolProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-school"></i> Profil Sekolah
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownSchoolProfile">
                      <li><a class="dropdown-item" href="sejarah.php"><i class="fas fa-history"></i> Sejarah</a></li>
                      <li><a class="dropdown-item" href="visi-misi.php"><i class="fas fa-bullseye"></i> Visi dan Misi</a></li>
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
    /* Menambahkan efek hover pada setiap item menu */
.nav-item:hover .nav-link {
    background-color: #f0f0f0;  /* Ganti warna latar belakang saat hover */
    color: #007bff;  /* Ganti warna teks saat hover */
    border-radius: 2px;  /* Memberikan radius pada sudut tombol */
    padding: 10px 15px; /* Menambahkan lebar (atas/bawah dan kanan/kiri) */
}

.nav-link {
    transition: all 0.3s ease;  /* Efek transisi yang halus */
}

/* Gaya Default untuk <h5> */
.d-flex.align-items-center.ms-3 h2 {
    font-family: 'Arial', sans-serif; /* Jenis huruf */
    color: #007bff; /* Warna primer */
    font-weight: bold; /* Menjadikan teks tebal */
    font-size: 24px; /* Ukuran default */
    margin-left: 10px; /* Tambahkan sedikit jarak kiri */
    transition: all 0.3s ease; /* Efek transisi halus */
}

/* Gaya Responsif untuk layar kecil (max-width: 768px) */
@media (max-width: 768px) {
    .d-flex.align-items-center.ms-3 h5 {
        font-size: 20px; /* Ukuran lebih kecil */
    }
}

/* Gaya Responsif untuk layar sangat kecil (max-width: 576px) */
@media (max-width: 576px) {
    .d-flex.align-items-center.ms-3 h5 {
        font-size: 16px; /* Ukuran paling kecil */
    }
}

/* Tambahkan efek hover untuk memberikan kombinasi warna */
.d-flex.align-items-center.ms-3 h2:hover {
    color: orange; /* Warna oranye saat hover */
}

/* Gaya Default untuk Ikon */
.d-flex.align-items-center.ms-3 i {
    font-size: 18px; /* Ukuran ikon lebih kecil */
    color: #007bff; /* Warna primer */
    transition: all 0.3s ease; /* Efek transisi halus */
    margin-right: 10px; /* Menambahkan jarak antara ikon dan teks */
}
/* Menyesuaikan ukuran logo di navbar */
.full-width-image {
    max-width: 80px; /* Menyesuaikan ukuran logo agar tidak terlalu besar */
    height: auto; /* Menjaga rasio aspek gambar */
}

/* Menyesuaikan ukuran logo ketika layar lebih kecil dari 768px */
@media (max-width: 768px) {
    .full-width-image {
        max-width: 50px; /* Mengurangi ukuran logo pada perangkat kecil */
    }
}
/* Menyesuaikan ukuran logo di navbar */
.full-width-img {
    max-width: 200px; /* Menyesuaikan ukuran logo agar tidak terlalu besar */
    height: auto; /* Menjaga rasio aspek gambar */
}

/* Menyesuaikan ukuran logo ketika layar lebih kecil dari 768px */
@media (max-width: 768px) {
    .full-width-img {
        max-width: 140px; /* Mengurangi ukuran logo pada perangkat kecil */
    }
}

/* Efek Hover untuk Ikon */
.d-flex.align-items-center.ms-3 i:hover {
    color: orange; /* Warna berubah menjadi oranye saat hover */
    transform: scale(1.2); /* Ikon membesar saat hover */
}

/* Responsivitas untuk Ikon pada Layar Kecil */
@media (max-width: 768px) {
    .d-flex.align-items-center.ms-3 i {
        font-size: 16px; /* Ukuran lebih kecil untuk layar kecil */
    }
}

/* Responsivitas untuk Ikon pada Layar Sangat Kecil */
@media (max-width: 576px) {
    .d-flex.align-items-center.ms-3 i {
        font-size: 14px; /* Ukuran paling kecil untuk layar sangat kecil */
    }
}

/* Responsivitas untuk layar sangat sangat kecil (max-width: 320px) */
@media (max-width: 320px) {
    /* Memperkecil ukuran teks dan ikon pada navbar untuk layar 320px */
    .navbar .nav-link {
        font-size: 12px; /* Ukuran teks lebih kecil */
        padding: 8px 12px; /* Menyesuaikan padding agar lebih kompak */
    }

    .navbar .nav-item {
        font-size: 12px; /* Ukuran font untuk item navbar lebih kecil */
    }

    .d-flex.align-items-center.ms-3 h5 {
        font-size: 14px; /* Ukuran judul lebih kecil */
    }

    .d-flex.align-items-center.ms-3 i {
        font-size: 12px; /* Ukuran ikon lebih kecil */
    }
}

</style>