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
    
    // Query untuk mengambil data dari tabel 'kutipan' dengan urutan data terbaru berdasarkan ID
    $data = mysqli_query($koneksi, "SELECT * FROM kutipan ORDER BY id_kutipan DESC");
    
    // Menampilkan data dalam format card
    while ($d = mysqli_fetch_array($data)) {
?>
<section class="py-5" style="background-image: url('images/bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
           
            <!-- Kolom 1 -->
            <div class="col-md-6 text-white pt-5">
                <h2>Selamat Datang Di</h2>
                <h2> Website Smp Agape  </h2>
                <h2>Indah Kupang</h2>
                <hr style="border-top: 4px solid #fff; width: 20%; margin: 10px 0;">
                <p>Kami senang Anda mengunjungi website kami. Temukan informasi terbaru tentang sekolah dan  kegiatan Kami. Mari berkembang bersama dalam suasana belajar yang penuh kasih dan kebersamaan!</p>
            </div>

            <!-- Kolom 2 -->
        <div class="col-md-6 text-white d-flex flex-column justify-content-end">
            <!-- Gambar di bagian bawah kolom -->
            <img src="images/22.png" alt="Gambar Sekolah" class="img-fluid mt-4">
        </div>
        </div>
    </div>

</section>

<!-- Marquee -->
<marquee behavior="scroll" direction="left" class="quote  marquee" scrollamount="5">
    <?php echo htmlspecialchars($d['deskripsi']); ?>
</marquee>


<?php
    }
?>


<style>

.py-5{
    height: 500px;
}
    /* Gambar tanpa pembatas dan ukuran penuh */
.full-width-image {
    width: 100%; /* Gambar mengisi penuh kolom */
    height: auto; /* Pertahankan proporsi asli gambar */
    border: none; /* Hilangkan pembatas */
}
    .fw-bold{
        color: blue;
    }
    .jumbotron{
        background-color: #fff;
        padding-bottom: 100px;
    }
    .konten-1{
        background-color: #fff;
    }
    .icon{
        font-size: 30px;
        padding-top: 50px;
    }

    /* General Body Reset */
body {
    margin: 0;
    padding: 0;
}
/* Atur gambar header */
.header {
    position: relative;
    height: 400px; /* Tinggi header */
    overflow: hidden;
}

.header img {
    object-fit: cover; /* Gambar menyesuaikan tanpa meregang */
}

/* Overlay Gelap */
.header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

/* Teks di Tengah */
.header .text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Membuat teks berada tepat di tengah */
    z-index: 2; /* Pastikan teks berada di atas overlay */
    text-align: center;
}

.header .text-overlay h3 {
    font-size: 2rem; /* Ukuran teks */
    font-weight: bold;
    color: black;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Efek bayangan pada teks */
}

/* Marquee */
.quote {
    background-color: #fff; /* Warna biru */
    color: black; /* Warna teks tetap putih */
    font-size: 1.2rem; /* Ukuran teks */
    padding-top: -20px;
    margin: 0;
    text-align: center;
}

/* Wave SVG */
.wave {
    display: block;
    margin: 20px;
    padding: 0;
    height: auto; /* Sesuaikan agar SVG tidak terdistorsi */
}
.konten{
    background-color: #fff; /* Warna biru */
    margin-top: -30px;
}

#tulisan{
   margin-top: 30px; 
}

#kepala-sekolah{
    margin-top: 60px;
}
.title{
    padding-bottom: 10px;
}
</style>

    <div class="row text-center">
        <div class="col-mt-3 pt-3 ">
        <p><div class="icon margin: 10px auto;">
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        </div>
        <hr style="border-top: 4px solid #000; width: 20%; margin: 10px auto; display: block;">
    </p>
        </div>
    </div>
<section class="konten">
<div class="container mt-4 fade">

<div class="row fade">
    <!-- Tulisan Terbaru -->
    <div id="tulisan" class="col-md-8">
        <h2 class="title fade text-center">Tulisan Terbaru</h2>
        <hr style="border-top: 4px solid #000; width: 20%; margin: 10px auto; display: block;">
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
              <h2 class="title fade text-center">Kepala Sekolah</h2>
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
<h2 class="title fade text-center">Galeri Foto dan Video</h2>
<hr style="border-top: 4px solid #000; width: 20%; margin: 10px auto; display: block;">
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
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,213.3C384,213,480,171,576,149.3C672,128,768,128,864,122.7C960,117,1056,107,1152,96C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>


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