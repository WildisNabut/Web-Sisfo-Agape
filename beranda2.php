

  <!DOCTYPE html>
  <html lang="id">
      
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SMP Kristen Agape Indah</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
  
  #galeri .img-thumbnail {
      width: 100%; /* Mengatur lebar penuh kolom */
      height: 200px; /* Mengatur tinggi tetap untuk semua gambar */
      object-fit: cover; /* Menyesuaikan gambar agar tidak terdistorsi */
      margin-bottom: 15px; /* Memberikan jarak antar gambar */
  }
  
          body {
              font-family: Arial, sans-serif;
              line-height: 1.6;
              background-color: #f8f9fa;
              color: #343a40;
              scroll-behavior: smooth;
          }
  
          .navbar-brand {
              font-weight: bold;
          }
  
          .navbar-nav .nav-link.active {
              background-color: #fff;
              color: #0056b3 !important;
              border-radius: 5px;
          }
  
          .header img {
              width: 100%;
              height: 600px;
              object-fit: cover;
          }
  
          .quote {
      font-size: 1rem;
      padding: 10px 0;
      font-style: italic;
      transition: opacity 0.3s ease-out, transform 0.3s ease-out; /* Mengubah durasi menjadi lebih cepat */
  }
  
  
          .section-title {
              font-size: 1.5rem;
              color: #0056b3;
              margin-bottom: 1rem;
          }
  
          .card {
              border: none;
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          }
  
          .card img {
              height: 150px;
              object-fit: cover;
              width: 100%;
          }
  
          .rounded-circle {
              width: 150px;
              height: 150px;
              object-fit: cover;
          }
  
          /* Modal Style */
          .modal-body {
              font-size: 1rem;
          }
  
          footer {
              background-color: #0056b3;
              color: white;
              padding: 1rem 0;
              margin-top: 2rem;
          }
  
          footer p {
              margin: 0;
          }
  
          /* Animasi Scroll */
          .fade {
              opacity: 0;
              transform: translateY(20px);
              transition: opacity 2s ease-out, transform 2s ease-out;
          }
  
          .fade.show {
              opacity: 1;
              transform: translateY(0);
          }
      </style>
  </head>
  <body>
  
  
      <!-- Header dengan marquee -->
      <header class="header fade">
          <img src="beranda_image/sekolah.webp" alt="SMP Kristen Agape Indah" class="img-fluid">
          <marquee behavior="scroll" direction="left" class="quote bg-primary text-white" scrollamount="15">
              “Hiduplah seakan-akan kau akan mati besok. Belajarlah seakan-akan kau akan hidup selamanya.” – Anonim
          </marquee>
          
      </header>
    
      <div class="container mt-4 fade">
          <div class="row fade">
              <!-- Tulisan Terbaru -->
              <div id="tulisan" class="col-md-8">
                  <h2 class="section-title">Tulisan Terbaru</h2>
                  <!-- Artikel pertama -->
                  <div class="card mb-3">
                      <div class="row g-0">
                          <div class="col-md-4">
                              <img src="beranda_image/2.jpg" class="img-fluid rounded-start" alt="Maulid Nabi">
                          </div>
                          <div class="col-md-8 fade">
                              <div class="card-body">
                                  <h5 class="card-title">Pertandingan Futsal</h5>
                                  <p class="card-text">Pertandingan futsal antar kelas di SMP Kristen Agape Indah tahun ini berlangsung dengan penuh semangat...</p>
                                  <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal1">Baca Selengkapnya</button>
                                  <p class="card-text"><small class="text-muted">27/09/2024</small></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Modal untuk Artikel pertama -->
                  <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content fade">
                              <div class="modal-header fade">
                                  <h5 class="modal-title fade" id="modal1Label">Tanding Futsal Antar Kelas</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body fade">
                                  <img src="beranda_image/2.jpg" class="img-fluid mb-3 fade" alt="Maulid Nabi">
                                  <p>Pertandingan futsal antar kelas di SMP Kristen Agape Indah tahun ini berlangsung dengan penuh semangat dan kebersamaan. Acara ini menjadi momen penting bagi seluruh siswa untuk berkompetisi dengan sportifitas tinggi, saling mendukung, dan mempererat tali persaudaraan antar kelas. Setiap pertandingan dipenuhi dengan atmosfer seru dan kompetitif, di mana para pemain menunjukkan keterampilan dan kerja sama tim yang luar biasa. Suasana menjadi semakin meriah dengan dukungan sorak sorai dari teman-teman sekelas, menjadikan acara ini tidak hanya sebagai ajang olahraga, tetapi juga sebagai bentuk kebersamaan yang mempererat hubungan di antara semua warga sekolah..</p>
                                  <!-- Isi artikel lengkap di sini -->
                              </div>
                          </div>
                      </div>
                  </div>
  
                  <!-- Artikel kedua -->
                  <div class="card mb-3 fade">
                      <div class="row g-0">
                          <div class="col-md-4">
                              <img src="beranda_image/4.jpg" class="img-fluid rounded-start" alt="HUT RI">
                          </div>
                          <div class="col-md-8">
                              <div class="card-body">
                                  <h5 class="card-title">Upacara HUT RI ke-79</h5>
                                  <p class="card-text">Upacara HUT RI berlangsung dengan khidmat...</p>
                                  <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal2">Baca Selengkapnya</button>
                                  <p class="card-text"><small class="text-muted">17/08/2024</small></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Modal untuk Artikel kedua -->
                  <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="modal2Label">Upacara HUT RI ke-79</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <img src="beranda_image/3.jpg" class="img-fluid mb-3" alt="HUT RI">
                                  <p>Upacara HUT RI di SMP Kristen Agape Indah berlangsung dengan penuh khidmat. Seluruh warga sekolah berkumpul untuk memperingati hari kemerdekaan dengan semangat patriotisme yang tinggi...</p>
                                  <!-- Isi artikel lengkap di sini -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
              <!-- Sidebar -->
              <div id="kepala-sekolah" class="col-md-4 fade">
                  <h2 class="section-title fade">Kepala Sekolah</h2>
                  <div class="text-center fade">
                      <img src="beranda_image/kepsek.png" class="img-fluid rounded-circle" alt="Kepala Sekolah">
                      <h4>Shin Tae Yong</h4>
                      <p>“**"Memimpin dengan kasih Kristus, menginspirasi melalui iman, dan melayani demi menciptakan generasi yang hidup dalam terang Tuhan."**”</p>
                  </div>
                  <hr>
                  <h2 class="section-title fade">Tautan</h2>
                  <ul>
                      <li><a href="#">Dinas Pendidikan Jawa Timur</a></li>
                      <li><a href="#">Dispendik Surabaya</a></li>
                  </ul>
              </div>
          </div>
  
          <!-- Foto dan Video Terbaru (sesuai permintaan Anda) -->
          <div id="galeri" class="mt-5 fade">
              <h2 class="section-title">Foto Terbaru</h2>
              <div class="row">
                  <div class="col-md-4">
                      <img src="beranda_image/5.jpg" class="img-thumbnail" alt="Foto 1">
                  </div>
                  <div class="col-md-4">
                      <img src="beranda_image/6.jpg" class="img-thumbnail" alt="Foto 2">
                  </div>
                  <div class="col-md-4">
                      <img src="beranda_image/3.jpg" class="img-thumbnail" alt="Foto 3">
                  </div>
              </div>
              <h2 class="section-title mt-4 fade">Video Terbaru</h2>
              <div class="row fade">
                  <div class="col-md-6">
                      <iframe class="w-100" src="https://www.youtube.com/embed/4TCU2mKmi-U" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-6">
                      <iframe class="w-100" src="https://www.youtube.com/embed/4TCU2mKmi-U" frameborder="0" allowfullscreen></iframe>
                  </div>
              </div>
              
          </div>
      </div>
  
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
       <!-- Animasi Scroll -->
       <script>
          const observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                  if (entry.isIntersecting) {
                      entry.target.classList.add('show');
                  } else {
                      entry.target.classList.remove('show');
                  }
              });
          });
  
          document.querySelectorAll('.fade').forEach(el => observer.observe(el));
      </script>
      
  </body>
  </html>
  
  
