<?php
include ('../koneksi.php');
?>
<?php include ('autentikasi.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SMP AGAPE INDAH - Akun</title>

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
  <h4 class="modal-title mx-auto">Kontrol Akun </h4>

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
<!-- konten yang ingin di rubah -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <a href="tambah_akun.php" class="btn btn-primary">Tambah Data</a>
            <div class="d-flex align-items-center">
                <!-- Sorting berdasarkan level -->
                <form class="form-inline mr-2" method="POST" action="">
                    <select name="filter_level" class="form-control" onchange="this.form.submit()">
                        <option value="">Semua</option>
                        <option value="1" <?= isset($_POST['filter_level']) && $_POST['filter_level'] == '1' ? 'selected' : '' ?>>Admin</option>
                        <option value="2" <?= isset($_POST['filter_level']) && $_POST['filter_level'] == '2' ? 'selected' : '' ?>>Guru</option>
                        <option value="3" <?= isset($_POST['filter_level']) && $_POST['filter_level'] == '3' ? 'selected' : '' ?>>Murid</option>
                    </select>
                </form>

                <!-- Pencarian -->
                <form class="form-inline" method="POST" action="">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="<?= isset($_POST['search']) ? $_POST['search'] : '' ?>" />
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center"><b>Username</th>
                            <th class="text-center" width="150"><b>Level</th>
                            <th class="text-center" colspan="2"><b>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Mendapatkan nilai filter dan pencarian
                        $filter_level = isset($_POST['filter_level']) ? $_POST['filter_level'] : '';
                        $search = isset($_POST['search']) ? $_POST['search'] : '';

                        // Query dasar
                        $query = "SELECT * FROM `akun` WHERE 1";

                        // Tambahkan kondisi filter level
                        if (!empty($filter_level)) {
                            $query .= " AND level = '$filter_level'";
                        }

                        // Tambahkan kondisi pencarian
                        if (!empty($search)) {
                            $query .= " AND username LIKE '%$search%'";
                        }

                        // Tambahkan sorting
                        $query .= " ORDER BY `username` ASC";

                        // Eksekusi query
                        $hasil = mysqli_query($koneksi, $query);

                        while ($data = mysqli_fetch_array($hasil)) {
                            // Konversi level
                            if ($data['level'] == 1) {
                                $Level = "Admin";
                            } elseif ($data['level'] == 2) {
                                $Level = "Guru";
                            } else {
                                $Level = "Murid";
                            }

                            echo "<tr>";
                            echo "<td class='text-center'>$data[username]</td>";
                            echo "<td class='text-center'>$Level</td>";
                            echo "<td class='text-center' width='100'><a href='akun_edit.php?kode=$data[username]' class='btn btn-success'>Edit</a></td>";
                            echo "<td class='text-center' width='100'>
                                <button class='btn btn-danger' onclick='showDeleteModal(\"$data[username]\")'>Hapus</button>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <!-- Icon Peringatan Besar -->
                <i class="fas fa-exclamation-triangle text-danger" style="font-size: 3rem;"></i>
            </div>
            <div class="modal-body text-center">
                <h5 class="modal-title mb-3" id="deleteModalLabel">Konfirmasi Hapus</h5>
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <a id="confirmDeleteBtn" href="#" class="btn btn-primary">Ya, Hapus</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk Modal Hapus -->
<script>
    function showDeleteModal(id) {
        // Set URL dengan ID data untuk dihapus
        document.getElementById('confirmDeleteBtn').href = 'Hapus_Akun.php?kode=' + id;
        
        // Tampilkan modal
        $('#deleteModal').modal('show');
    }
</script>
	  <!-- akhir dari konten -->
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->
     
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
