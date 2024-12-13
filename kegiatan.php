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
<section class="py-5" style="background-image: url('images/bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
           
            <!-- Kolom 1 -->
            <div class="col-md-6 text-white pt-5">
                <h2>Kategori: Berita</h2>
                <hr style="border-top: 4px solid #000; width: 20%; margin: 10px 0;">
            <p><a href="index.php">Smp Kristen Agape Indah Kupang</a> - Berita </p>
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
<div class="container mt-4">
<h2 class="title fade text-center">Berita</h2>
<span style="border-top: 2px solid #000; width: 15%; margin: 10px auto; display: block;" class="pb-4"></span>
<div class="row">
        <?php include('koneksi.php');
        // Query untuk mengambil 2 data terbaru dari tabel kegiatan
        $data = mysqli_query($koneksi, "SELECT * FROM kegiatan ORDER BY tanggal DESC");
        // Menampilkan data dalam format card
        while ($d = mysqli_fetch_array($data)) {
        // Menentukan deskripsi terbatas (batasi 200 karakter)
        $description = substr($d['deskripsi'], 0, 50) . '...'; // Mengambil 200 karakter pertama
        ?>
 <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <img src="Admin/<?php echo $d['gambar']; ?>" class="card-img-top" alt="Foto tidak tersedia">
          <div class="card-body">
            <p class="custom-card-date">
              <i class="fas fa-calendar-alt"></i> 
              <?php echo htmlspecialchars($d['tanggal']); ?>
            </p>
            <h5 class="card-title">
              <i class="fas fa-tag"></i> 
              <strong><?php echo htmlspecialchars($d['judul']); ?></strong>
            </h5>
            <p class="card-text mt-2"><?php echo $description; ?></p>
            <a href="tampil_berita.php?id=<?php echo $d['id_kegiatan']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
        <?php
        }
        ?>
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