<?php include ('autentikasi.php'); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SMP AGAPE INDAH</title>

  <!-- Custom fonts and styles for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
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

  <h5 class="modal-title mx-auto">Daftar Tugas </h5>
  <!-- User Dropdown (aligned to right) -->
  <ul class="navbar-nav ml-auto">
  <!-- Divider between Message and User icons -->
  <div class="topbar-divider d-none d-sm-block"></div>
  <?php
@session_start();
if (!isset($_SESSION['username'])) {
    echo "<ul class='agile_forms'></ul>";
} else {
    echo "
    <ul class='agile_forms'>
        <div class='d-flex align-items-center position-relative'>
            <!-- Nama Pengguna -->
            <span class='ml-3' onmouseover='showCard()' onmouseout='hideCard()' data-toggle='modal' data-target='#userModal'>" . $_SESSION['username'] . "</span>
            
            <!-- Profil lingkaran -->
            <div class='rounded-circle bg-primary text-white d-flex align-items-center justify-content-center' style='width: 40px; height: 40px; cursor: pointer;'> <!-- Menambahkan cursor: pointer -->
                <span class='font-weight-bold'>" . strtoupper(substr($_SESSION['username'], 0, 1)) . "</span>
            </div>
        </div>
    </ul>";
}
?>
  </ul>
</nav>
<!-- End of Topbar -->
        <!-- konten yang ingin di rubah -->
        <div class="container-fluid">
         <!-- Murid -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <form class="form-inline" method="POST" action="">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
    <div class="row">
        <?php
        // Pastikan pengguna sudah login
        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
        }

        include('../koneksi.php');

        // Ambil username dari session
        $username = $_SESSION['username'];

        // Mengambil id_kelas dari tabel siswa yang terkait dengan username
        $query_siswa = "SELECT id_kelas FROM murid WHERE username = '$username'";
        $result_siswa = mysqli_query($koneksi, $query_siswa);
        $data_siswa = mysqli_fetch_assoc($result_siswa);

        // Mengambil id_kelas siswa
        $id_kelas_siswa = $data_siswa['id_kelas'];

        // Query untuk mengambil mata pelajaran yang memiliki tugas berdasarkan id_kelas
        $query_mapel_tugas = "SELECT DISTINCT mp.nama_matapelajaran, mp.kode_mata_pelajaran, t.tanggal_selesai
                              FROM tugas t
                              JOIN mata_pelajaran mp ON t.kode_mata_pelajaran = mp.kode_mata_pelajaran
                              WHERE t.id_kelas = '$id_kelas_siswa'";

        $result_mapel_tugas = mysqli_query($koneksi, $query_mapel_tugas);

        // Menampilkan nama mata pelajaran yang memiliki tugas dalam bentuk card
        while ($data_mapel = mysqli_fetch_array($result_mapel_tugas)) {
            $nama_mata_pelajaran = $data_mapel['nama_matapelajaran'];
            $kode_mata_pelajaran = $data_mapel['kode_mata_pelajaran'];
            $tanggal_selesai = $data_mapel['tanggal_selesai'];

            echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>$nama_mata_pelajaran</h5>
                            <h6 class='card-title'>$tanggal_selesai</h5>
                            <a href='lihat_tugas.php?kode_mata_pelajaran=$kode_mata_pelajaran&id_kelas=$id_kelas_siswa' class='btn btn-primary'>Lihat Tugas</a>
                        </div>
                    </div>
                  </div>";
        }
        ?>
    </div>
</div>

         </div>
 </div>



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
                <!-- Tombol konfirmasi Logout -->
                <a id="confirmLogoutBtn" href="logout.php" class="btn btn-primary">
                    <i class="fa fa-sign-out-alt mr-2"></i> Ya, Keluar
                </a>
                <!-- Tombol Batal -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>



<!-- JS Bootstrap (disarankan di akhir body) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
