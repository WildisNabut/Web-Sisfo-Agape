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
// Menyertakan file koneksi database
include('koneksi.php');

// Mengecek apakah ada parameter 'id_renungan' di URL
if (isset($_GET['id'])) {
    // Mendapatkan nilai 'id' dari URL
    $id_renungan = $_GET['id'];

    // Query untuk mengambil data renungan berdasarkan 'id_renungan'
    $query = "SELECT * FROM renungan WHERE id_renungan = '$id_renungan'";
    $result = mysqli_query($koneksi, $query);

    // Mengecek apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
        // Mengambil data renungan
        $renungan = mysqli_fetch_array($result);
    } else {
        echo "Renungan tidak ditemukan!";
        exit;
    }
} else {
    echo "ID Renungan tidak valid!";
    exit;
}
?>

<section class="py-5" style="background-image: url('images/bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
           
            <!-- Kolom 1 -->
            <div class="col-md-6 text-white pt-5">
                <h2>Kategori: Renungan</h2>
                <hr style="border-top: 4px solid #fff; width: 20%; margin: 10px 0;">
            <p><a href="index.php">Smp Kristen Agape Indah Kupang</a> - Renungan - <?php echo htmlspecialchars($renungan['judul']); ?> </p>
              </div>
        </div>
    </div>

</section>
<style>
.konten {
            max-width: 850px; /* Tentukan lebar maksimum card */
            margin: auto; /* Pusatkan card */
        }

        .card {
            width: 100%; /* Pastikan card mengambil lebar penuh container */
        }

        @media (max-width: 768px) {
            .konten {
                max-width: 90%; /* Card lebih fleksibel pada layar kecil */
            }
        }

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
<div class="konten mt-5">
    <div class="card shadow-sm">
        <!-- Gambar Renungan -->
        <img src="images/a1.jpeg" class="card-img-top" alt="Gambar Renungan" style="height: 300px; object-fit: cover;">
        <div class="card-body">
            <!-- Isi Renungan -->
            <p class="card-text">
                <?php echo nl2br(htmlspecialchars($renungan['isi'])); ?>
            </p>
            <!-- Ayat dan Tanggal -->
            <p class="small text-muted">
                <i class="fas fa-calendar-alt"></i> Tanggal: <?php echo date('d F Y', strtotime($renungan['tanggal'])); ?>
                <br>
                <i class="fas fa-book"></i> Baca: <?php echo htmlspecialchars($renungan['ayat']); ?>
            </p>
        </div>

        <div class="card-footer text-center">
            <a href="renungan.php" class="btn btn-secondary btn-sm">Kembali ke Daftar Renungan</a>
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