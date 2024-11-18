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
 

  <script src="https://unpkg.com/feather-icons"></script>

  <!-- //css files -->
  <!-- online-fonts -->
  <link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <!-- //online-fonts -->
</head>

<body>

<!-- Page Wrapper -->
<div class="konten" style="background-color: #fff;" id="wrapper">
    <!-- Sidebar -->
    <?php include ('slide.php'); ?> 
    <!-- End of Sidebar -->
<!-- Konten kamu -->

         <div class="container-fluid py-5" style="background: url('images/renungan/1.png') no-repeat center center; background-size: cover; min-height: 100vh;">
        <div class="container">
        <h1 class="text-center text-white mb-5" style="font-size: 2.5rem; font-weight: bold;">Pengumuman Terbaru</h1>

        <div class="row justify-content-center">
            <?php
            include('koneksi.php');
            
            // Query untuk mengambil data pengumuman yang statusnya Aktif dan diurutkan berdasarkan tanggal terbaru
            $data = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE status = 'Aktif' ORDER BY tanggal DESC");
            $i = 0; // Untuk melacak indeks GIF
            
            // Menampilkan data dalam format card
            while ($d = mysqli_fetch_array($data)) {
                // Pilih GIF berdasarkan indeks
                $i++;
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg" style="border-radius: 15px; overflow: hidden;">
                        <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between" style="font-size: 1.25rem; font-weight: bold;">
                            <!-- Logo Sekolah di Kiri -->
                            <img src="images/logo_agape.png" alt="Logo Sekolah" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                            
                            <!-- Judul -->
                            <span><?php echo htmlspecialchars($d['judul']); ?></span>
                            
                            <!-- Logo SMP di Kanan -->
                            <img src="images/logo_tutwuri.png" alt="Logo SMP" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                        </div>
                        <div class="card-body d-flex align-items-start">
                            <!-- GIF Kartun -->
                            <!-- Konten Pengumuman -->
                            <div>
                                <p><strong>Tanggal: </strong><?php echo date('d F Y', strtotime($d['tanggal'])); ?></p>
                                <p><?php echo nl2br(htmlspecialchars($d['dekripsi'])); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
    }
    .container-fluid {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }
    .card-header {
        background-color: #3498db !important; /* Warna biru untuk header card */
        font-size: 1.25rem;
        font-weight: bold;
    }
    .card-header img {
        flex-shrink: 0; /* Membuat gambar tetap proporsional */
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

  <!-- js-scripts -->
  <!-- js-files -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
  <!-- //js-files -->
  <!-- Baneer-js -->


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
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome CSS untuk ikon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<!-- jQuery dan Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <!-- //js-scripts -->
</body>
 <!-- Footer Bottom -->
 <div class="footer-bottom">
    &copy; Copyright SMP Agape Indah 2024. All Rights Reserved.
  </div>
  
</html>