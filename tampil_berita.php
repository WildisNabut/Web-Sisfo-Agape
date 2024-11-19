<?php session_start(); ?>
<?php include ('koneksi.php'); ?> 
<?php
include('koneksi.php');

// Cek apakah parameter id ada
if (isset($_GET['id']))
    $id = intval($_GET['id']); // Pastikan id berupa angka untuk keamanan
    // Query untuk mengambil data berita berdasarkan ID
    $query = "SELECT * FROM kegiatan WHERE id_kegiatan = $id";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
        $d = mysqli_fetch_assoc($result); // Ambil data
        ?>
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


<div class="header-text">
        <span class="title">SMP AGAPE INDAH - Berita - <?php echo htmlspecialchars($d['judul']); ?></span>
            
        
    </div>
    <div class="social-icons">
    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
    <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
    </div>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4"> 
                <!-- Memperbaiki path gambar -->
                <img src="Admin/<?php echo $d['gambar']; ?>" class="img-fluid rounded-start" alt="Foto tidak tersedia">            </div>
            <div class="col-md-8 fade">
                <div class="card-body">
                    <p class="card-text"><?php echo htmlspecialchars($d['deskripsi']); ?></p> <!-- Menampilkan deskripsi terbatas -->
                    <p class="card-text"><i class="fas fa-calendar-alt"></i> <small class="text-muted"><?php echo htmlspecialchars($d['tanggal']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
  <?php
            }
            ?>          
        




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