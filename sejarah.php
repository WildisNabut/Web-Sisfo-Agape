
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
      <title>Sejarah SMP AGAPE INDAH KUPANG</title>
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
  
          .hero {
              display: flex;
              justify-content: center;
              align-items: center;
              flex-direction: column; /* Menumpuk gambar dan teks secara vertikal */
              padding: 20px 50px;
              background: #2e4482;
              color: white;
          }
  
          .hero-image {
              position: relative;
              text-align: center;
              margin-bottom: 20px;
          }
  
          .hero-image img {
              max-width: 250px;
              animation: zoomImage 10s infinite alternate;
          }
  
          /* Animasi gambar */
          @keyframes zoomImage {
              0% {
                  transform: scale(1);
              }
              100% {
                  transform: scale(1.1);
              }
          }
  
          /* Teks yang berjalan */
          .hero-content {
              width: 100%;
              text-align: left;
              overflow: hidden;
              white-space: nowrap;
          }
  
          .hero-content h1 {
              font-size: 2.5rem;
              color: white;
              animation: scrollText 10s linear infinite;
          }
  
          /* Animasi teks berjalan dari kiri ke kanan */
          @keyframes scrollText {
              0% {
                  transform: translateX(-100%); /* Mulai di luar layar di kiri */
              }
              100% {
                  transform: translateX(100%); /* Bergerak ke luar layar di kanan */
              }
          }
  
          /* Bagian Sejarah */
          .sejarah {
              padding: 50px 20px;
              text-align: center;
              background: #f9f9f9;
          }
  
          .sejarah h2 {
              font-size: 2.5rem;
              color: #2e4482;
              margin-bottom: 10px;
          }
  
          .sejarah-content {
              display: flex;
              justify-content: space-between;
              flex-wrap: wrap;
              max-width: 1000px;
              margin: 0 auto;
          }
  
          .sejarah-content div {
              width: 48%;
              text-align: justify;
              margin-bottom: 20px;
              opacity: 0;
              transform: translateY(20px);
              animation: fadeInUp 1s ease-out forwards;
          }
  
          @keyframes fadeInUp {
              to {
                  opacity: 1;
                  transform: translateY(0);
              }
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
              <h1>SEJARAH SEKOLAH SMP AGAPE INDAH KUPANG</h1> <!-- Teks berjalan di bawah gambar -->
          </div>
      </header>
  
      <main>
          <section class="sejarah">
              <div class="sejarah-content">
                  <div>
                      <p>SMP AGAPE INDAH KUPANG didirikan pada tahun 2000 dengan tujuan untuk memberikan pendidikan yang berkualitas bagi siswa di wilayah Kupang. Sejak saat itu, sekolah ini telah berkembang pesat, mengedepankan nilai-nilai karakter, kreativitas, dan prestasi. Dalam perjalanannya, sekolah ini terus berusaha untuk memperbaiki fasilitas dan kualitas pengajaran agar bisa mencetak generasi yang berkompeten dan berakhlak mulia.</p>
  
                      <p>Pada tahun 2005, SMP AGAPE INDAH KUPANG mulai membuka berbagai program ekstrakurikuler untuk menunjang minat dan bakat siswa di luar bidang akademik. Kegiatan-kegiatan ini, seperti olahraga, seni, dan keterampilan, sangat mendukung perkembangan pribadi siswa. Sekolah ini juga menjalin kerjasama dengan berbagai lembaga pendidikan dan pemerintahan untuk meningkatkan kualitas pendidikannya.</p>
  
                      <p>Seiring berjalannya waktu, SMP AGAPE INDAH KUPANG semakin dikenal sebagai sekolah yang berprestasi dalam berbagai bidang. Tidak hanya di tingkat lokal, sekolah ini juga sering meraih penghargaan dalam berbagai kompetisi, baik akademik maupun non-akademik, di tingkat provinsi maupun nasional. Visi dan misi yang telah dijalankan dengan baik turut mendorong semangat para siswa untuk terus berprestasi.</p>
                  </div>
  
                  <div>
                      <p>Hari ini, SMP AGAPE INDAH KUPANG terus berkembang dengan membangun generasi muda yang unggul dalam akademik, kreatif dalam seni, dan kokoh dalam karakter. Dengan nilai-nilai pendidikan yang berlandaskan pada kebudayaan dan kemajuan zaman, sekolah ini siap mencetak lulusan-lulusan yang siap bersaing di dunia global.</p>
  
                      <p>Dalam menghadapi era digital dan globalisasi, SMP AGAPE INDAH KUPANG berkomitmen untuk mempersiapkan para siswa dengan keterampilan teknologi yang dibutuhkan di masa depan. Oleh karena itu, berbagai fasilitas digital dan program pembelajaran berbasis teknologi terus dikembangkan.</p>
  
                      <p>Dengan semangat dan dedikasi yang tinggi, SMP AGAPE INDAH KUPANG akan terus berusaha menjadi lembaga pendidikan yang unggul, berkualitas, dan memberikan kontribusi positif bagi kemajuan pendidikan di Indonesia.</p>
                  </div>
              </div>
          </section>
      </main>
  

  </body>
  </html>




  <script>
    function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.classList.toggle('active');
    }

    function toggleDropdown(event, element) {
      event.stopPropagation(); // Stop click event from bubbling up
      const parentLi = element.parentElement;
      const isOpen = parentLi.classList.contains('open');
      
      // Close all dropdowns before opening the clicked one
      closeAllDropdowns();

      // If the clicked dropdown was not already open, open it
      if (!isOpen) {
        parentLi.classList.add('open');
        // Update the toggle icon
        const icon = element.querySelector('.toggle-icon');
        icon.textContent = "–"; // Minus icon
      } else {
        parentLi.classList.remove('open');
        const icon = element.querySelector('.toggle-icon');
        icon.textContent = "+"; // Plus icon
      }
    }

    function closeAllDropdowns() {
      document.querySelectorAll('.nav-links li.open').forEach(item => {
        item.classList.remove('open');
        const icon = item.querySelector('.toggle-icon');
        if (icon) icon.textContent = "+"; // Reset icon to plus
      });
    }

    // Close dropdowns and menu when clicking outside
    document.addEventListener('click', function(event) {
      const nav = document.querySelector('nav');
      const dropdowns = document.querySelectorAll('.nav-links li.open');
      
      // Check if the click is outside of the nav
      if (!nav.contains(event.target)) {
        closeAllDropdowns();
        // Close mobile menu if open
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.remove('active');
      }
    });

    // Prevent dropdown from closing when clicking inside it
    document.querySelectorAll('.nav-links li').forEach(item => {
      item.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent click from propagating to document
      });
    });
  </script>
        <?php include ('footer.php'); ?>

</body>

</html>
