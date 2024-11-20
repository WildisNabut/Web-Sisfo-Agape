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
  <link rel="stylesheet" href="style.css" />
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
          <img src="beranda_image/sekolah.webp" alt="SMP Kristen Agape Indah" class="img-fluid">
          <marquee behavior="scroll" direction="left" class="quote bg-primary text-white" scrollamount="5">
          <?php echo htmlspecialchars($d['deskripsi']); ?>
          </marquee>
      </header>

      <?php
            }
            ?>
      
      <div class="container mt-4 fade">
        <div class="#">
          
        </div>
    <div class="row fade">
        <!-- Tulisan Terbaru -->
        <div id="tulisan" class="col-md-8">
            <h2 class="section-title">Tulisan Terbaru</h2>
            <!-- Artikel pertama -->
            <?php
    include('koneksi.php');
    // Query untuk mengambil 2 data terbaru dari tabel kegiatan
    $data = mysqli_query($koneksi, "SELECT * FROM kegiatan ORDER BY tanggal DESC LIMIT 2");
    $i = 0; // Untuk melacak indeks GIF
    
    // Menampilkan data dalam format card
    while ($d = mysqli_fetch_array($data)) {
        // Menentukan deskripsi terbatas (batasi 200 karakter)
        $description = substr($d['deskripsi'], 0, 200) . '...'; // Mengambil 200 karakter pertama
?>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4"> 
                <!-- Memperbaiki path gambar -->
                <img src="Admin/<?php echo $d['gambar']; ?>" class="img-fluid rounded-start" alt="Foto tidak tersedia">            </div>
            <div class="col-md-8 fade">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($d['judul']); ?></h5>
                    <p class="card-text"><?php echo $description; ?></p> <!-- Menampilkan deskripsi terbatas -->
                    <a href="tampil_berita.php?id=<?php echo $d['id_kegiatan']; ?>">
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal1">Baca Selengkapnya</button>
                    </a>
                    <p class="card-text"><small class="text-muted"><?php echo htmlspecialchars($d['tanggal']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>
                 
                 
              </div>
  
              <!-- Sidebar -->
              <div id="kepala-sekolah" class="col-md-4 fade">
                  <h2 class="section-title fade">Kepala Sekolah</h2>
                  <div class="text-center fade">
                      <img src="beranda_image/kepsek.png" class="img-fluid rounded-circle" alt="Kepala Sekolah">
                      <h4>Shin Tae Yong</h4>
                      <p>“**"Memimpin dengan kasih Kristus, menginspirasi melalui iman, dan melayani demi menciptakan generasi yang hidup dalam terang Tuhan."**”</p>
                  </div>
                  <hr>

              </div>
          </div>
  
<!-- Foto dan Video Terbaru -->
<!-- Foto dan Video Terbaru -->
<div id="galeri" class="mt-5 fade">
    <h2 class="section-title">Galeri Foto dan Video</h2>
    <div class="row align-items-start">
        <!-- Foto -->
        <div class="col-lg-6 mb-3">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    include('koneksi.php');
                    // Query untuk mengambil 10 data terbaru dari tabel kegiatan
                    $data = mysqli_query($koneksi, "SELECT * FROM foto LIMIT 10");
                    $isActive = true; // Menandai slide pertama sebagai aktif
                    
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
                            <img src="Admin/<?php echo $d['gambar']; ?>" class="img-fluid rounded-start d-block w-100" alt="Foto tidak tersedia">
                        </div>
                        <?php
                        $isActive = false; // Slide berikutnya menjadi tidak aktif
                    }
                    ?>
                </div>
                <!-- Navigasi Carousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Video -->
        <div class="col-lg-6">
            <div class="row">
                <?php  
                include('koneksi.php');
                // Query untuk mengambil data dari tabel vidio
                $tampil = "SELECT * FROM vidio LIMIT 2"; // Batasi jumlah video yang ditampilkan
                $hasil = mysqli_query($koneksi, $tampil);

                while ($data = mysqli_fetch_array($hasil)) {
                    // Mengganti URL YouTube dengan format embed
                    $url_vidio = $data['url_vidio'];
                    $embed_url = str_replace("watch?v=", "embed/", $url_vidio);
                    ?>
                    <div class="col-md-6 mb-3">
                        <iframe width="100%" height="150" src="<?php echo $embed_url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <?php         
                }
                ?>
            </div>
        </div>
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