<?php session_start(); ?>
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
<div id="wrapper">
    <!-- Sidebar -->
    <?php include ('slide.php'); ?> 
    <!-- End of Sidebar -->
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <!-- Gambar animasi -->
            <img src="https://i.pinimg.com/originals/3b/e2/f4/3be2f445535301ebc8d739576ce8b36d.gif" alt="Animasi Kontak" class="img-fluid mb-4">


<div class="Konten">
<div class="contact-container">
    <!-- Gambar animasi (gantikan dengan URL gambar yang sesuai) -->
    <img src="https://i.pinimg.com/originals/3b/e2/f4/3be2f445535301ebc8d739576ce8b36d.gif" alt="Animasi Kontak">
    
    <h2>Silahkan kontak Email berikut</h2>
    <p class="email">smpagapeindah22@gmail.com</p>
    


            <div class="button-container">
                <!-- Tombol Kirim Email dengan ikon -->
                <button class="btn btn-primary btn-lg" onclick="window.location.href='mailto:siteunc22@gmail.com'">
                    <i class="fas fa-envelope"></i> Kirim Email
                </button>
                <!-- Tombol Hubungi via WhatsApp dengan ikon -->
                <button class="btn btn-success btn-lg ml-3" onclick="window.location.href='https://wa.me/6282144893442?text=Halo,%20saya%20ingin%20menghubungi%'">
                    <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                </button>
            </div>
        </div>
    </div>
</div>
 <!-- Footer Section -->
 <?php include('footer.php'); ?>
<!-- Konten kamu -->

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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <!-- //js-scripts -->
</body>
 <!-- Footer Bottom -->
 <div class="footer-bottom" style="background-color: 003366;">
    &copy; Copyright SMP Agape Indah 2024. All Rights Reserved.
  </div>
  
</html>