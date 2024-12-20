<?php include ('autentikasi.php'); ?> 
<?php include('../koneksi.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SMP AGAPE INDAH - Edit akun</title>

  <!-- Custom fonts and styles for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    <?php include ('sidebar.php'); ?> 
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <h4 class="modal-title mx-auto">Form Tambah Akun</h4>

  <!-- User Dropdown (aligned to right) -->
  <ul class="navbar-nav ml-auto">
    <?php
    @session_start();
    if (empty($_SESSION['username'])) {
      echo "
      <li class='nav-item'>
        <a class='nav-link' href='#' data-toggle='modal' data-target='#myModal2'><i class='fa fa-sign-in' aria-hidden='true'></i> Masuk</a>
      </li>";
    } else {
      echo "
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle user-dropdown' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          <span class='mr-2 d-none d-lg-inline text-gray-600 small'>$_SESSION[username]</span>
          <i class='fas fa-user'></i>
        </a>
        <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='userDropdown'>
        <a class='dropdown-item' href='#' data-toggle='modal' data-target='#logoutModal'>
          <i class='fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>Logout
        </a>
      </div>
      </li>";
    }
    ?>
  </ul>
</nav>
<!-- End of Topbar -->
        <!-- End of Topbar -->


<!-- Konten -->
<div class="container-fluid">

<div id="Edit_Akun">
    <div class="container">
        <div class="container margin-atas">

        <?php
            $Kode = $_GET['kode'];
            $query = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$Kode'");
            $data = mysqli_fetch_array($query);

            $Password = md5($data['password']);
            $Level = $data['level'];
        ?>

        <!-- Modal untuk Error -->
        <?php if (isset($_SESSION['error'])): ?>
        <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="errorModalLabel">Kesalahan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= $_SESSION['error']; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <form class="form-group" action="Proses_Edit_Akun.php" method="post">
            <!-- Username Lama -->
            <div class="form-group row">
                <label for="Username_Lama" class="col-sm-2 col-form-label">Username Lama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Username_Lama" name="Username_Lama" value="<?php echo $Kode; ?>" readonly>
                </div>
            </div>

            <!-- Username Baru -->
            <div class="form-group row">
                <label for="Username_Baru" class="col-sm-2 col-form-label">Username Baru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Username_Baru" name="Username_Baru" placeholder="Opsional">
                </div>
            </div>

            <!-- Password Baru -->
            <div class="form-group row">
                <label for="Password" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Password" name="Password" placeholder="Opsional">
                </div>
            </div>

            <!-- Level -->
            <div class="form-group row">
                <label for="Level" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                    <select class="form-control" id="Level" name="Level">
                        <option value="1" <?php if ($Level == 1) echo 'selected'; ?>>Admin</option>
                        <option value="2" <?php if ($Level == 2) echo 'selected'; ?>>Guru</option>
                        <option value="3" <?php if ($Level == 3) echo 'selected'; ?>>Murid</option>
                    </select>
                </div>
            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="akun.php" class="btn btn-secondary ml-2">Batal</a>
                </div>
            </div>
        </form>

        </div>
        
        <div class="clearfix margin-bawah"></div>
    </div>
</div>

</div>
<!-- Akhir dari Konten -->

<script>
    // Tampilkan modal jika ada error
    window.addEventListener('load', function () {
        if (document.getElementById('errorModal')) {
            new bootstrap.Modal(document.getElementById('errorModal')).show();
        }
    });
</script>





      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ilmu komputer 2024</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <!-- Modal Konfirmasi Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <!-- Icon Peringatan Besar -->
                    <i class="fas fa-exclamation-triangle text-danger" style="font-size: 3rem;"></i>
                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title mb-3" id="logoutModalLabel">Apakah Anda yakin ingin keluar?</h5>
                </div>
                <div class="modal-footer justify-content-center">
                <a id="confirmLogoutBtn" href="logout.php" class="btn btn-primary">
                <i class="fa fa-sign-out-alt mr-2"></i> Ya, Keluar</a>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

  <!-- Scripts -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/sb-admin-2.min.js"></script>
</body>
</html>
