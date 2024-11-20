

  <!DOCTYPE html>
  <html lang="id">
  <head>
        <!-- CSS files -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font-Awesome-Icons-CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/beranda.css" />
  <link rel="stylesheet" href="css/kontak.css" />
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- JavaScript files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <?php include("navbar.php") ?>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Visi & Misi SMP AGAPE INDAH KUPANG</title>
      <style>
          * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
          }
  
          body {
              font-family: 'Arial', sans-serif;
              line-height: 1.6;
              color: #333;
          }
  
         /* Hero Section */
         .hero {
              display: flex;
              justify-content: center;
              align-items: center;
              flex-direction: column; /* Menumpuk gambar dan teks secara vertikal */
              padding: 50px 50px; /* Menambah padding agar lebih besar */
              background: #2e4482;
              color: white;
              position: relative; /* Agar teks bisa diposisikan di atas gambar */
              overflow: hidden; /* Menyembunyikan teks yang berada di luar area hero */
          }
  
          .hero-image img {
              max-width: 250px; /* Membesarkan gambar */
              margin-bottom: 20px; /* Memberikan jarak antara gambar dan teks */
          }
  
          .hero-content h1 {
              font-size: 2.5rem; /* Ukuran teks yang lebih besar */
              margin: 0;
              position: absolute; /* Agar teks bisa bergerak */
              white-space: nowrap; /* Menjaga teks tetap dalam satu baris */
              animation: moveText 10s linear infinite; /* Animasi teks bergerak */
          }
  /* Animasi teks bergerak dari kiri ke kanan */
  @keyframes moveText {
              0% {
                  left: -100%; /* Mulai dari luar layar di sebelah kiri */
                  opacity: 1;
              }
              50% {
                  left: 50%; /* Tengah layar */
                  opacity: 1;
              }
              100% {
                  left: 100%; /* Berhenti di luar layar di sebelah kanan */
                  opacity: 0;
              }
          }
  
          /* Visi dan Misi */
          .visi-misi {
              padding: 50px 20px;
              text-align: justify;
              background: #E3F2FD;
          }
  
          .visi-misi h2 {
              font-size: 2rem;
              color: #2e4482;
              margin-bottom: 10px;
          }
  
          .visi-misi p {
              margin-bottom: 30px;
              font-size: 1.1rem;
              color: #555;
          }
  
          /* Layout untuk dua kolom (gambar + teks) */
          .visi-misi-content {
              display: flex;
              justify-content: space-between;
              align-items: center;
              max-width: 1000px;
              margin: 0 auto;
              padding-top: 30px;
          }
  
          .visi-misi-image {
              flex: 1;
              margin-right: 20px;
          }
  
          .visi-misi-text {
              flex: 2;
              text-align: justify; /* Membuat teks rata kiri-kanan */
          }
  
          .visi-misi-image img {
              max-width: 400px; /* Menyesuaikan ukuran gambar GIF */
              width: 100%; /* Agar gambar responsif */
          }
  
          .misi ol {
              text-align: left;
              margin: 0 auto;
              max-width: 700px;
              padding-left: 20px;
          }
  
          /* Footer */
          .footer {
              background: #2e4482;
              color: white;
              padding: 20px;
              text-align: center;
          }
  
          .footer nav a {
              text-decoration: none;
              color: white;
              margin: 0 10px;
          }
          .footer nav a:hover {
              text-decoration: underline;
          }
      </style>
  </head>
  <body>
      <header class="hero">
          <div class="hero-image">
              <img src="https://smp42sby.sch.id/assets/img/hero-img.png" alt="Ilustrasi Pendidikan">
          </div>
          <div class="hero-content">
              <h1>VISI DAN MISI SMP AGAPE INDAH KUPANG</h1>
          </div>
      </header>
  
      <main>
          <section id="visi-misi" class="visi-misi">
              <div class="visi-misi-content">
                  <div class="visi-misi-image">
                      <img src="animasi/visi.gif" alt="GIF Pendidikan">
                  </div>
                  <div class="visi-misi-text">
                      <h2>VISI</h2>
                      <p>Unggul dalam Prestasi, Berbudi Pekerti Luhur Dilandasi Imtak dan Iptek serta Berbudaya Lingkungan.</p>
                      <h2>MISI</h2>
                      <ol>
                          <li>Meningkatkan prestasi akademik melalui kegiatan intrakurikuler dan kokurikuler.</li>
                          <li>Meningkatkan prestasi nonakademik melalui kegiatan ekstrakurikuler.</li>
                          <li>Mengembangkan sikap dan pribadi yang berbudi pekerti luhur, religius, dan cinta tanah air.</li>
                          <li>Membentuk karakter kritis, kreatif, dan kolaboratif melalui Projek Penguatan Profil Pelajar Pancasila.</li>
                          <li>Menyediakan lingkungan sekolah yang sehat, nyaman, dan inklusif.</li>
                      </ol>
                  </div>
              </div>
          </section>
      </main>
      <?php include ('footer.php'); ?>


  </body>
  </html>
  

