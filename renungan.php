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
      <header class="header fade">
          <img src="images/renungan/1.png" alt="SMP Kristen Agape Indah" class="img-fluid">
          <marquee behavior="scroll" direction="left" class="quote bg-primary text-white" scrollamount="5">
          <?php echo htmlspecialchars($d['deskripsi']); ?>
          </marquee>
      </header>

      <?php
      }
      ?>
<div class="container-fluid py-5" style="background: linear-gradient(to bottom, #f0f0f0, #d1d1d1); min-height: 100vh;">
    <div class="container">
        <h1 class="text-center text-dark mb-5" style="font-size: 2.5rem; font-weight: bold;">Renungan</h1>

        <div class="row justify-content-center">
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
            $first = true; // Untuk memastikan card pertama tetap di atas

            while ($d = mysqli_fetch_array($data)) {
                // Pilih gambar berdasarkan indeks
                $gif = $gifs[$i % count($gifs)];
                $i++;
            ?>
                <div class="col-12 col-md-8 col-lg-6 mb-4 <?php echo $first ? 'order-1' : ''; ?>"> <!-- Hanya card pertama yang tetap di atas -->
                    <div class="card shadow-lg" style="border-radius: 15px; overflow: hidden;">
                        <!-- Header -->
                        <div class="card-header text-center" style="background-color: #3498db; color: white; font-size: 1.25rem; font-weight: bold;">
                            <!-- Gambar Renungan -->
                            <img src="<?php echo $gif; ?>" alt="Gambar Renungan" style="width: 100%; height: auto; border-radius: 10px; margin-bottom: 15px;">
                            
                            <!-- Judul Renungan -->
                            <span><?php echo htmlspecialchars($d['judul']); ?></span>
                        </div>
                        
                        <!-- Body -->
                        <div class="card-body text-center">
                            <!-- Konten Renungan -->
                            <p><strong>Tanggal: </strong><?php echo date('d F Y', strtotime($d['tanggal'])); ?></p>
                            <p><?php echo nl2br(htmlspecialchars($d['isi'])); ?></p>
                        </div>
                        
                        <!-- Footer -->
                        <div class="card-footer d-flex justify-content-between align-items-center" style="background-color: #f7f7f7;">
                            <!-- Ikon Buku -->
                            <div>
                                <i class="fas fa-book" style="color: #3498db; font-size: 1.5rem;"></i>
                                <small> Ayat: <?php echo htmlspecialchars($d['ayat']); ?></small>
                            </div>
                            
                            <!-- Kalender -->
                            <div>
                                <i class="fas fa-calendar-alt" style="color: #3498db; font-size: 1.5rem;"></i>
                                <small> <?php echo date('d M Y', strtotime($d['tanggal'])); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $first = false; // Setelah card pertama, set $first ke false
            }
            ?>
        </div>
    </div>
</div>


            

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