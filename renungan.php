<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>SMP AGAPE</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  
  <!-- CSS files -->
   <link rel="stylesheet" href="style.css">
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
</head>

<?php include ('navbar.php'); ?> 
<body>
<!-- Header dengan marquee -->
         <?php
            include('koneksi.php');
            
            // Query untuk mengambil data pengumuman yang statusnya Aktif dan diurutkan berdasarkan tanggal terbaru
            $data = mysqli_query($koneksi, "SELECT * FROM kutipan");
            $i = 0; // Untuk melacak indeks GIF
            
            // Menampilkan data dalam format card
            while ($d = mysqli_fetch_array($data)) {
                // Pilih GIF berdasarkan indeks
                $i++;
            ?>
<section class="py-5" style="background-image: url('images/bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
           
            <!-- Kolom 1 -->
            <div class="col-md-6 text-white pt-5">
                <h2>Kategori: Renungan</h2>
                <hr style="border-top: 4px solid #fff; width: 20%; margin: 10px 0;">
            <p><a href="index.php">Smp Kristen Agape Indah Kupang</a> - Renungan </p>
              </div>
        </div>
    </div>

</section>
<style>

.py-5{
    height: 300px;
}
    /* Gambar tanpa pembatas dan ukuran penuh */
.full-width-image {
    width: 100%; /* Gambar mengisi penuh kolom */
    height: auto; /* Pertahankan proporsi asli gambar */
    border: none; /* Hilangkan pembatas */
}
 /* Hapus garis bawah pada link */
 p a {
            text-decoration: none;
            color: inherit; /* Agar warna teks mengikuti paragraf */
        }

        /* Tambahkan efek hover jika diperlukan */
        p a:hover {
          color: aquamarine;
        }

</style>
      <header class="header fade">
      <marquee behavior="scroll" direction="left" class="quote bg-primary text-white" scrollamount="5">
            <?php echo htmlspecialchars($d['deskripsi']); ?>
        </marquee>
        <!-- Card untuk Tanggal Hari Ini -->
        <div class="date-card">
            <?php echo date('l, d F Y'); // Menampilkan hari, tanggal, bulan, dan tahun ?>
        </div>        
    </header>

      <?php
      }
      ?>

<div class="container mt-4">
<h2 class="title fade text-center">Renungan</h2>
<span style="border-top: 2px solid #000; width: 15%; margin: 10px auto; display: block;" class="pb-4"></span>

    <!-- Pembungkus utama -->
    <div class="row">
        <?php
        include('koneksi.php');
        
        // Query untuk mengambil data renungan dan diurutkan berdasarkan tanggal terbaru
        $data = mysqli_query($koneksi, "SELECT * FROM renungan ORDER BY tanggal DESC");
        $gifs = [
            "images/a1.jpeg",  // Ganti dengan gambar yang sesuai
            "images/a2.jpeg",
            "images/a3.jpeg",
            "images/a4.jpeg",
            "images/a5.jpeg",
            "images/a6.jpeg",
            "images/a7.jpeg",
            "images/a8.jpeg",
            "images/a9.jpeg",
            "images/a10.jpeg"
        ];
        $i = 0; // Untuk melacak indeks gambar

        while ($d = mysqli_fetch_array($data)) {
            // Pilih gambar berdasarkan indeks
            $gif = $gifs[$i % count($gifs)];
            $i++;
        ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <!-- Gambar -->
                <img src="<?php echo $gif; ?>" class="card-img-top" alt="Gambar Renungan" style="height: 200px; object-fit: cover; border-radius: 5px 5px 0 0;">
                <div class="card-body">
                    <!-- Judul -->
                    <h5 class="card-title text-primary">
                        <?php echo htmlspecialchars($d['judul']); ?>
                    </h5>
                    <!-- Isi Renungan (dibatasi) -->
                    <p class="card-text text-secondary">
                        <?php echo substr(htmlspecialchars($d['isi']), 0, 100) . (strlen($d['isi']) > 100 ? "..." : ""); ?>
                    </p>
                    <!-- Ayat dan Tanggal -->
                    <p class="small text-muted">
                      <i class="fas fa-book"></i> <span style="font-weight: bold;"> Bacaan</span> :  <?php echo htmlspecialchars($d['ayat']); ?>
                      <br>
                      <i class="fas fa-calendar-alt"></i> <span style="font-weight: bold;"> Tanggal</span> : <?php echo date('d F Y', strtotime($d['tanggal'])); ?>
                    </p>
                </div>
                <div class="card-footer text-center">
                    <!-- Tombol Lihat Selengkapnya -->
                    <a href="tampil_renungan.php?id=<?php echo $d['id_renungan']; ?>" class="btn btn-primary btn-sm">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,213.3C384,213,480,171,576,149.3C672,128,768,128,864,122.7C960,117,1056,107,1152,96C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>
      <?php include ('footer.php'); ?>
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