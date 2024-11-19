
  <!DOCTYPE html>
  <html lang="id">
  <head>
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
              <img src="animasi/struktur-organisasi.png" alt="Struktur Organisasi Sekolah" class="fade-in-zoom">
          </section>
      </main>
  

  </body>
  </html>
  
