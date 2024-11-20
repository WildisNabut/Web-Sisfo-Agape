
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
      <title>Struktur Organisasi SMP AGAPE INDAH KUPANG</title>
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
  
          /* Struktur Organisasi */
          .fade-in-zoom {
              animation: fadeZoomIn 2s ease-in-out;
              transform-origin: center;
          }
  
          @keyframes fadeZoomIn {
              0% {
                  transform: scale(0.5);
                  opacity: 0;
              }
              100% {
                  transform: scale(1);
                  opacity: 1;
              }
          }
  
          .struktur-organisasi {
              padding: 50px 20px;
              text-align: center;
              background: #ffffff;
          }
  
          .struktur-organisasi img {
              width: 80%;
              margin: 20px auto;
              display: block;
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
              <h1>STRUKTUR ORGANISASI</h1>
          </div>
      </header>
  
      <main>
          <section class="struktur-organisasi">
              <img src="beranda_image/struktur-organisasi.png" alt="Struktur Organisasi Sekolah" class="fade-in-zoom">
          </section>
      </main>
  
      <?php include ('footer.php'); ?>

  </body>
  </html>
  
