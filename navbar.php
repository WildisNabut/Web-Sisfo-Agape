<!-- Sidebar -->
 
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ffffff ; ">   <!-- Sidebar - Brand -->
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon rotate-n-15 btn btn-primary btn-sm">
         <i class="fas fa-book-open"></i>
      </div>
      <div class="sidebar-brand-text mx-3" style="color: #000000 !important;">AGAPE<sup>indah</sup></div>
   </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-home"></i> <!-- Ikon dasbor -->
      <span>Beranda</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Data Sekolah Section -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataSekolah" aria-expanded="true" aria-controls="collapseDataSekolah">
      <i class="fas fa-fw fa-cogs"></i> <!-- Ikon pengaturan -->
      <span>Informasi</span>
    </a>
    <div id="collapseDataSekolah" class="collapse" aria-labelledby="headingDataSekolah" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header"><span>Informasi</span></h6>
        <a class="collapse-item" href="pengumuman.php">Pengumuman</a>
        <a class="collapse-item" href="kegiatan.php">Kegiatan Sekolah</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Nav Item - Renungan -->
  <li class="nav-item">
    <a class="nav-link" href="renungan.php">
      <i class="fas fa-fw fa-book"></i> <!-- Ikon buku untuk renungan -->
      <span>Renungan</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Nav Item - Fasilitas -->
  <li class="nav-item">
    <a class="nav-link" href="kutipan.php">
      <i class="fas fa-fw fa-wrench"></i> <!-- Ikon kunci pas untuk fasilitas -->
      <span>Fasilitas</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Galeri Section -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleri" aria-expanded="false" aria-controls="collapseGaleri">
      <i class="fas fa-fw fa-images"></i> <!-- Ikon galeri untuk gambar -->
      <span>Galeri</span>
    </a>
    <div id="collapseGaleri" class="collapse" aria-labelledby="headingGaleri" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Galeri Sekolah</h6>
        <a class="collapse-item" href="video.php">Video</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Profil Sekolah Section -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfilSekolah" aria-expanded="false" aria-controls="collapseProfilSekolah">
      <i class="fas fa-fw fa-building"></i> <!-- Ikon gedung untuk profil sekolah -->
      <span>Profil Sekolah</span>
    </a>
    <div id="collapseProfilSekolah" class="collapse" aria-labelledby="headingProfilSekolah" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Profil Sekolah</h6>
        <a class="collapse-item" href="sejarah.php">Sejarah</a>
        <a class="collapse-item" href="visi_misi.php">Visi & Misi</a>
        <a class="collapse-item" href="struktur.php">Struktur Organisasi</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />
    <!-- Nav Item - Fasilitas -->
    <li class="nav-item">
    <a class="nav-link" href="mail.php">
      <i class="fas fa-fw fa-envelope"></i> <!-- Ikon kunci pas untuk fasilitas -->
      <span>Kontak</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />
  
 <!-- Sidebar Toggler -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0 bg-black text-dark" id="sidebarToggle">
    </button>
</div>
</ul>
<!-- End of Sidebar -->

<style>
  /* Mengatur warna dasar sidebar */
  #accordionSidebar {
      background-color: #ffffff !important; /* Warna latar belakang putih */
  }

  #accordionSidebar .nav-link {
      position: relative; /* Posisi untuk pseudo-element */
      color: #000000 !important; /* Warna teks hitam */
      overflow: hidden; /* Memastikan efek tidak keluar */
      transition: color 0.3s ease; /* Transisi warna */
  }

  #accordionSidebar .nav-link:hover {
      color: #007bff !important; /* Warna teks biru saat hover */
  }

  /* Pseudo-element untuk garis */
  #accordionSidebar .nav-link::before {
      content: ""; /* Konten kosong untuk garis */
      position: absolute;
      bottom: 0; /* Garis di bagian bawah */
      left: 0; /* Mulai dari kiri */
      width: 0; /* Awalnya garis tidak terlihat */
      height: 2px; /* Ketebalan garis */
      background-color: #007bff; /* Warna garis biru */
      transition: width 0.3s ease; /* Animasi perubahan lebar */
  }

  /* Efek hover untuk menampilkan garis */
  #accordionSidebar .nav-link:hover::before {
      width: 100%; /* Garis memenuhi lebar link */
  }

  /* Mengatur ikon agar tetap terpusat */
  #accordionSidebar .nav-link i {
      color: inherit; /* Ikon mengikuti warna teks */
      transition: color 0.3s ease;
  }
</style>


