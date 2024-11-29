<?php session_start(); ?>
<?php include ('koneksi.php'); ?> 
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>SMP AGAPE</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

  <!--// Meta tag Keywords -->
  <!-- css files -->
  <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link rel="stylesheet" href="css/beranda.css" />
  <link rel="stylesheet" href="css/kontak.css" />
   <!-- Custom fonts and styles for this template -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<link href="css/sb-admin-2.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="style.css">

  <script src="https://unpkg.com/feather-icons"></script>

  <!-- //css files -->
  <!-- online-fonts -->
  <link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <!-- //online-fonts -->
</head>

<body>

<!-- Page Wrapper -->
    <!-- Sidebar -->
    <?php include ('navbar.php'); ?> 
    <!-- End of Sidebar -->
<!-- Konten kamu -->

<header class="hero">
          <div class="hero-image">
              <img src="https://smp42sby.sch.id/assets/img/hero-img.png" alt="Ilustrasi Pendidikan">
          </div>
          <div class="hero-content">
              <h1>SEJARAH SEKOLAH SMP AGAPE INDAH KUPANG</h1> <!-- Teks berjalan di bawah gambar -->
          </div>
      </header>
      <section class="legalitas py-4">
      <div class="container">
    <div class="row text-center">
        <!-- Kolom 1 -->
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm card-sk-pendirian">
                <div class="card-body">
                    <i class="fas fa-building fa-2x text-primary mb-2"></i>
                    <h6 class="card-title">SK Pendirian</h6>
                    <p class="card-text">DIS.PPO.801/SEK.14/2014</p>
                </div>
            </div>
        </div>
        <!-- Kolom 2 -->
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm card-tanggal-sk">
                <div class="card-body">
                    <i class="fas fa-calendar-alt fa-2x text-success mb-2"></i>
                    <h6 class="card-title">Tanggal SK Pendirian</h6>
                    <p class="card-text">20 March 2014</p>
                </div>
            </div>
        </div>
        <!-- Kolom 3 -->
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm card-sk-operasional">
                <div class="card-body">
                    <i class="fas fa-file-signature fa-2x text-warning mb-2"></i>
                    <h6 class="card-title">SK Operasional</h6>
                    <p class="card-text">DIS.PPO.801/SEK.14/2014</p>
                </div>
            </div>
        </div>
        <!-- Kolom 4 -->
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm card-tanggal-sk-operasional">
                <div class="card-body">
                    <i class="fas fa-calendar-check fa-2x text-danger mb-2"></i>
                    <h6 class="card-title">Tanggal SK Operasional</h6>
                    <p class="card-text">20 March 2014</p>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
<style>
    /* Atur dasar untuk card */
.card {
    position: relative;
    overflow: hidden;
    border-radius: 0.5rem; /* Sudut membulat */
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05); /* Zoom sedikit saat hover */
}

/* Atur dasar untuk icon */
.card i {
    z-index: 2; /* Pastikan ikon tetap di atas */
    position: relative;
    transition: color 0.3s ease; /* Animasi perubahan warna */
}

/* Pseudo-element untuk efek warna */
.card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: transparent; /* Transparan saat tidak hover */
    border-radius: 0.5rem; /* Menjaga sudut membulat */
    transition: all 0.5s ease; /* Animasi efek meluas */
    z-index: 1;
    opacity: 0.3; /* Transparansi */
}

/* Efek hover untuk setiap kartu */
.card:hover i {
    color: white; /* Ikon berubah menjadi putih saat hover */
}

.card:hover .card-sk-pendirian::before {
    background-color: #007bff; /* Warna biru untuk SK Pendirian */
}

.card:hover .card-tanggal-sk::before {
    background-color: #28a745; /* Warna hijau untuk Tanggal SK Pendirian */
}

.card:hover .card-sk-operasional::before {
    background-color: #ffc107; /* Warna kuning untuk SK Operasional */
}

.card:hover .card-tanggal-sk-operasional::before {
    background-color: #dc3545; /* Warna merah untuk Tanggal SK Operasional */
}

/* Kelas khusus untuk setiap ikon */
.card-sk-pendirian i {
    color: #007bff; /* Warna biru untuk ikon SK Pendirian */
}

.card-tanggal-sk i {
    color: #28a745; /* Warna hijau untuk ikon Tanggal SK Pendirian */
}

.card-sk-operasional i {
    color: #ffc107; /* Warna kuning untuk ikon SK Operasional */
}

.card-tanggal-sk-operasional i {
    color: #dc3545; /* Warna merah untuk ikon Tanggal SK Operasional */
}

</style>
<section class="sejarah">
  <div class="container">
    <div class="row">
      <!-- Kolom 1 -->
      <div class="col-md-6 mb-3">
        <div class="sejarah-content">
          <p class="text-justify">SMP AGAPE INDAH KUPANG didirikan pada tahun 2000 dengan tujuan untuk memberikan pendidikan yang berkualitas bagi siswa di wilayah Kupang. Sejak saat itu, sekolah ini telah berkembang pesat, mengedepankan nilai-nilai karakter, kreativitas, dan prestasi. Dalam perjalanannya, sekolah ini terus berusaha untuk memperbaiki fasilitas dan kualitas pengajaran agar bisa mencetak generasi yang berkompeten dan berakhlak mulia.</p>
          
          <p class="text-justify">Pada tahun 2005, SMP AGAPE INDAH KUPANG mulai membuka berbagai program ekstrakurikuler untuk menunjang minat dan bakat siswa di luar bidang akademik. Kegiatan-kegiatan ini, seperti olahraga, seni, dan keterampilan, sangat mendukung perkembangan pribadi siswa. Sekolah ini juga menjalin kerjasama dengan berbagai lembaga pendidikan dan pemerintahan untuk meningkatkan kualitas pendidikannya.</p>
          
          <p class="text-justify">Seiring berjalannya waktu, SMP AGAPE INDAH KUPANG semakin dikenal sebagai sekolah yang berprestasi dalam berbagai bidang. Tidak hanya di tingkat lokal, sekolah ini juga sering meraih penghargaan dalam berbagai kompetisi, baik akademik maupun non-akademik, di tingkat provinsi maupun nasional. Visi dan misi yang telah dijalankan dengan baik turut mendorong semangat para siswa untuk terus berprestasi.</p>
        </div>
      </div>
      <!-- Kolom 2 -->
      <div class="col-md-6 mb-3">
        <div class="sejarah-content">
          <p class="text-justify">Hari ini, SMP AGAPE INDAH KUPANG terus berkembang dengan membangun generasi muda yang unggul dalam akademik, kreatif dalam seni, dan kokoh dalam karakter. Dengan nilai-nilai pendidikan yang berlandaskan pada kebudayaan dan kemajuan zaman, sekolah ini siap mencetak lulusan-lulusan yang siap bersaing di dunia global.</p>
          
          <p class="text-justify">Dalam menghadapi era digital dan globalisasi, SMP AGAPE INDAH KUPANG berkomitmen untuk mempersiapkan para siswa dengan keterampilan teknologi yang dibutuhkan di masa depan. Oleh karena itu, berbagai fasilitas digital dan program pembelajaran berbasis teknologi terus dikembangkan.</p>
          
          <p class="text-justify">Dengan semangat dan dedikasi yang tinggi, SMP AGAPE INDAH KUPANG akan terus berusaha menjadi lembaga pendidikan yang unggul, berkualitas, dan memberikan kontribusi positif bagi kemajuan pendidikan di Indonesia.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Menambahkan styling untuk teks rata kiri-kanan jika diperlukan -->
<style>
  .sejarah-content p {
    text-align: justify;
  }
</style>


      
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
    animation: scrollText 15s linear infinite;

    position: absolute; /* Membuat teks bisa dipindahkan secara bebas */
    top: 80%; /* Sesuaikan nilai untuk menaikkan teks ke atas */
    left: 50%; /* Posisikan di tengah secara horizontal */
    transform: translateX(-50%); /* Sesuaikan agar tetap rata tengah */
    white-space: nowrap; /* Pastikan teks tidak terpotong */
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



 <!-- End of Footer -->
<?php include('footer.php'); ?>
 <!-- Akhir konte yang mau di rubah  -->        
		</div>
	</div>
  </div>
  <!-- End of Page Wrapper -->
 <!-- Footer Section -->
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
  <!-- End of Page Wrapper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Footer Section -->

  <!-- js-scripts -->
  <!-- js-files -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
  <!-- smooth scrolling -->
  <script src="js/SmoothScroll.min.js"></script>
  <!-- //smooth scrolling -->
  <!-- stats -->
  <script type="text/javascript" src="js/numscroller-1.0.js"></script>
  <!-- //stats -->
  <!-- moving-top scrolling -->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      /*
      	var defaults = {
      	containerID: 'toTop', // fading element id
      	containerHoverID: 'toTopHover', // fading element hover id
      	scrollSpeed: 1200,
      	easingType: 'linear' 
      	};
      */
      $().UItoTop({
        easingType: 'easeOutQuart'
      });
    });
  </script>
  <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //moving-top scrolling -->
  <!-- gallery popup -->
  <script src="js/jquery.swipebox.min.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
      $(".swipebox").swipebox();
    });
  </script>
  <!-- //gallery popup -->
  <!--/script-->
  <script src="js/simplePlayer.js"></script>
  <script>
    $("document").ready(function() {
      $("#video").simplePlayer();
    });
  </script>
  <!-- //Baneer-js -->
  <!-- Calendar -->
  <script src="js/jquery-ui.js"></script>
  <script>
    $(function() {
      $("#datepicker").datepicker();
    });
  </script>
  <!-- //Calendar -->
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <!-- //js-scripts -->
</body>
</html>