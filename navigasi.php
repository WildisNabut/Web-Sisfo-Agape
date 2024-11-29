<nav class="navbar navbar-expand-md bg-white fixed-top">
    <div class="container-fluid d-flex align-items-center">
        <!-- Logo di sebelah kiri -->
        <img src="images/logo_agape.png" alt="Logo Sekolah" class="img-fluid full-width-image">
        <img src="beranda_image/log.png" alt="Gambar Sekolah" class="img-fluid full-width-img">

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item"><a class="nav-link text-primary fw-semibold" href="index.php"> Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi</a>
                    <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="pengumuman.php"> Pengumuman</a></li>
                        <li><a class="dropdown-item" href="kegiatan.php"> Berita</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdownGallery" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Galeri
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownGallery">
                      <li><a class="dropdown-item" href="foto.php"> Foto</a></li>
                      <li><a class="dropdown-item" href="galeri_vidio.php"> Video</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="renungan.php"> Renungan</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdownSchoolProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Profil Sekolah
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownSchoolProfile">
                      <li><a class="dropdown-item" href="sejarah.php"> Sejarah</a></li>
                      <li><a class="dropdown-item" href="visi-misi.php"> Visi dan Misi</a></li>
                      <li><a class="dropdown-item" href="struktur-organisasi.php"> Organisasi</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="kontak2.php"> Kontak</a>
              </li>            
            </ul>
        </div>

        <!-- Konten nab.php -->
        <div class="ms-auto d-flex align-items-center">
            <?php include('nab.php'); ?>
        </div>

       <!-- Hamburger menu untuk layar kecil -->
        <div class="hamburger d-md-none" style="margin-right: 10px;">
            <button class="btn btn-primary p-2 d-flex align-items-center justify-content-center shadow-sm" 
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="width: 30px; height: 30px;">
                <i class="fas fa-bars" style="font-size: 24px; color: white;"></i>
            </button>
        </div>
    </div>

    <!-- Offcanvas menu -->
    <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-light text-primary">
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $hour = date('H');
            $greeting = ($hour >= 5 && $hour < 11) ? "Selamat Pagi" : (($hour >= 11 && $hour < 15) ? "Selamat Siang" : (($hour >= 15 && $hour < 18) ? "Selamat Sore" : "Selamat Malam"));
            ?>
            <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">
                <?= $greeting; ?>, <?= empty($_SESSION['username']) ? "Hai!" : "<span class='text-warning'>" . htmlspecialchars($_SESSION['username']) . "</span>"; ?>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item"><a class="nav-link text-primary fw-semibold" href="index.php"> Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi</a>
                    <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="pengumuman.php"> Pengumuman</a></li>
                        <li><a class="dropdown-item" href="kegiatan.php"> Berita</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdownGallery" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Galeri
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownGallery">
                      <li><a class="dropdown-item" href="foto.php"> Foto</a></li>
                      <li><a class="dropdown-item" href="galeri_vidio.php"> Video</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="renungan.php"> Renungan</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link text-primary fw-semibold dropdown-toggle" href="#" id="navbarDropdownSchoolProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Profil Sekolah
                  </a>
                  <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdownSchoolProfile">
                      <li><a class="dropdown-item" href="sejarah.php"> Sejarah</a></li>
                      <li><a class="dropdown-item" href="visi-misi.php"> Visi dan Misi</a></li>
                      <li><a class="dropdown-item" href="struktur-organisasi.php"> Organisasi</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-primary fw-semibold" href="kontak2.php"> Kontak</a>
              </li>            
            </ul>
    </div>
</nav>

<style>

  /* Styling untuk Offcanvas */
.custom-offcanvas {
    width: 75%; /* Lebar Offcanvas */
    background-color: #f8f9fa; /* Warna latar */
    padding: 20px; /* Tambahkan padding */
    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1); /* Tambahkan sedikit bayangan */
}

/* Heading dalam Offcanvas */
.offcanvas-header {
    border-bottom: 1px solid #ddd; /* Garis bawah */
    padding-bottom: 10px; /* Tambahkan jarak */
    margin-bottom: 15px; /* Spasi antara header dan konten */
}

/* Menu item dalam Offcanvas */
.offcanvas .nav-link {
    font-size: 16px; /* Ukuran font sedang */
    font-weight: 500; /* Tebal font */
    padding: 10px 15px; /* Padding untuk menu */
    color: #007bff; /* Warna biru */
    border-radius: 5px; /* Sudut melengkung */
    transition: all 0.3s ease-in-out; /* Efek transisi */
}

/* Hover efek menu */
.offcanvas .nav-link:hover {
    background-color: #e9ecef; /* Latar hover */
    color: #0056b3; /* Warna teks hover */
}

/* Dropdown menu dalam Offcanvas */
.offcanvas .dropdown-menu {
    background-color: #ffffff; /* Warna latar */
    border-radius: 8px; /* Sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
}

/* Item dalam dropdown */
.offcanvas .dropdown-item {
    font-size: 15px; /* Ukuran font */
    color: #007bff; /* Warna teks */
    padding: 10px 15px; /* Padding */
    transition: all 0.2s ease-in-out; /* Efek transisi */
}

/* Hover efek dropdown */
.offcanvas .dropdown-item:hover {
    background-color: #e9ecef; /* Latar hover */
    color: #0056b3; /* Warna teks hover */
}

/* Responsivitas untuk layar kecil */
@media (max-width: 576px) {
    .custom-offcanvas {
        width: 100%; /* Lebar penuh untuk layar kecil */
        padding: 15px; /* Kurangi padding */
    }

    .offcanvas .nav-link {
        font-size: 14px; /* Ukuran font lebih kecil */
        padding: 8px 10px; /* Kurangi padding */
    }

    .offcanvas .dropdown-item {
        font-size: 14px; /* Ukuran font lebih kecil */
    }
}


  /* Atur jarak tombol hamburger dari sisi kanan */
.hamburger {
    margin-right: 20px; /* Tambahkan jarak 20px dari sisi kanan */
}

/* Responsivitas untuk layar kecil */
@media (max-width: 768px) {
    .hamburger {
        margin-right: 15px; /* Atur ulang jarak jika perlu di layar kecil */
    }
}

/* Menyesuaikan lebar Offcanvas */
.custom-offcanvas {
    width: 75%; /* Atur lebar offcanvas */
}

/* Marginal kiri otomatis untuk elemen di kanan */
.ms-auto {
    margin-left: auto !important;
}

/* Styling untuk tombol hamburger */
.hamburger .btn {
    transition: all 0.3s ease-in-out;
}

/* Efek hover pada tombol */
.hamburger .btn:hover {
    background-color: #0056b3; /* Warna hover */
    transform: scale(1.1); /* Sedikit perbesar */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
}

/* Ikon di dalam tombol */
.hamburger .btn i {
    transition: transform 0.3s ease-in-out;
}

/* Animasi ikon saat hover */
.hamburger .btn:hover i {
    transform: rotate(180deg); /* Ikon berputar saat hover */
}


/* Default gaya untuk elemen H2 */
.d-flex.align-items-center.ms-3 h2 {
    font-family: 'Arial', sans-serif; /* Jenis huruf */
    color: #007bff; /* Warna primer */
    font-weight: bold; /* Teks tebal */
    font-size: 24px; /* Ukuran default */
    margin-left: 10px; /* Tambahkan jarak kiri */
}

/* Responsivitas: Layar kecil */
@media (max-width: 768px) {
    .d-flex.align-items-center.ms-3 h5 {
        font-size: 20px; /* Ukuran lebih kecil */
    }

    /* Hanya tampilkan menu offcanvas */
    .navbar-collapse {
        display: none !important; /* Hilangkan menu utama */
    }

    .offcanvas {
        display: block !important; /* Tampilkan offcanvas */
    }
}

/* Responsivitas: Layar sangat kecil */
@media (max-width: 576px) {
    .d-flex.align-items-center.ms-3 h5 {
        font-size: 16px; /* Ukuran lebih kecil */
    }
}

/* Hover untuk kombinasi warna */
.d-flex.align-items-center.ms-3 h2:hover {
    color: orange; /* Warna berubah menjadi oranye saat hover */
}

/* Gaya default untuk ikon */
.d-flex.align-items-center.ms-3 i {
    font-size: 18px; /* Ukuran ikon lebih kecil */
    color: #007bff; /* Warna primer */
    margin-right: 10px; /* Jarak antara ikon dan teks */
}

/* Gaya responsif untuk logo di navbar */
.full-width-image {
    max-width: 60px; /* Sesuaikan ukuran */
    height: auto; /* Jaga rasio */
}

/* Gaya responsif untuk logo di navbar */
.full-width-img {
    max-width: 150px; /* Sesuaikan ukuran */
    height: auto; /* Jaga rasio */
}

/* Responsivitas untuk logo di perangkat kecil */
@media (max-width: 768px) {
    .full-width-image {
        max-width: 50px; /* Ukuran lebih kecil */
    }
    .full-width-img {
        max-width: 80px; /* Ukuran lebih kecil */
    }
}

/* Efek hover untuk ikon */
.d-flex.align-items-center.ms-3 i:hover {
    color: orange; /* Warna berubah menjadi oranye */
    transform: scale(1.2); /* Ikon membesar */
}

/* Responsivitas ikon untuk layar kecil */
@media (max-width: 768px) {
    .d-flex.align-items-center.ms-3 i {
        font-size: 16px;
    }
}

/* Responsivitas ikon untuk layar sangat kecil */
@media (max-width: 576px) {
    .d-flex.align-items-center.ms-3 i {
        font-size: 14px;
    }
}

/* Responsivitas: Hilangkan menu offcanvas di layar besar */
@media (min-width: 768px) {
    .offcanvas {
        display: none !important; /* Hilangkan offcanvas */
    }

    .navbar-collapse {
        display: flex !important; /* Tampilkan menu utama */
    }
}

/* Responsivitas: layar sangat kecil (max-width: 320px) */
@media (max-width: 320px) {
    /* Memperkecil ukuran teks dan ikon */
    .navbar .nav-link {
        font-size: 12px;
        padding: 8px 12px;
    }

    .navbar .nav-item {
        font-size: 12px;
    }

    .d-flex.align-items-center.ms-3 h5 {
        font-size: 14px;
    }

    .d-flex.align-items-center.ms-3 i {
        font-size: 12px;
    }
}

</style>
