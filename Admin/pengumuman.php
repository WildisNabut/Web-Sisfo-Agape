<?php include('../koneksi.php');?>
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

  <h4 class="modal-title mx-auto">Data Pengumuman</h4>

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


        
<!-- Konten -->
<div class="container-fluid">

             <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">

          <!-- Dropdown untuk memilih jumlah data per halaman -->
          <form method="POST" action="" class="form-inline">
              <div class="input-group mr-2">
                  <label for="limit" class="mr-2">Tampilkan:</label>
                  <select name="limit" id="limit" class="custom-select" onchange="this.form.submit()">
                      <option value="10" <?php if (isset($_POST['limit']) && $_POST['limit'] == 10) echo 'selected'; ?>>10</option>
                      <option value="15" <?php if (isset($_POST['limit']) && $_POST['limit'] == 25) echo 'selected'; ?>>15</option>
                      <option value="20" <?php if (isset($_POST['limit']) && $_POST['limit'] == 50) echo 'selected'; ?>>20</option>
                  </select>
              </div>
          </form>  

          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download</a>
          </div>
            </form>  

           <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <a href="tambahpengumuman.php" class="btn btn-primary">Tambah Data</a>
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
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class="header-no">
                        No
                        <!-- Dropdown untuk Sorting -->
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link dropdown-toggle" type="button" id="dropdownNo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sort"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownNo">
                                <a class="dropdown-item" href="#">Sort Ascending</a>
                                <a class="dropdown-item" href="#">Sort Descending</a>
                            </div>
                        </div>
                    </th>
                    <th class="header-judul">
                        Judul
                        <!-- Dropdown untuk Sorting -->
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link dropdown-toggle" type="button" id="dropdownJudul" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sort"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownJudul">
                                <a class="dropdown-item" href="#">Sort Ascending</a>
                                <a class="dropdown-item" href="#">Sort Descending</a>
                            </div>
                        </div>
                    </th>
                    <th class="header-konten">
                        Deskripsi
                        <!-- Dropdown untuk Sorting -->
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link dropdown-toggle" type="button" id="dropdownDeskripsi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sort"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownDeskripsi">
                                <a class="dropdown-item" href="#">Sort Ascending</a>
                                <a class="dropdown-item" href="#">Sort Descending</a>
                            </div>
                        </div>
                    </th>
                    <th class="header-tanggal">
                        Tanggal
                        <!-- Dropdown untuk Sorting -->
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link dropdown-toggle" type="button" id="dropdownTanggal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sort"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownTanggal">
                                <a class="dropdown-item" href="#">Sort Ascending</a>
                                <a class="dropdown-item" href="#">Sort Descending</a>
                            </div>
                        </div>
                    </th>
                    <th class="header-status">
                        Status
                        <!-- Dropdown untuk Sorting -->
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link dropdown-toggle" type="button" id="dropdownStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sort"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownStatus">
                                <a class="dropdown-item" href="#">Aktif</a>
                                <a class="dropdown-item" href="#">Nonaktif</a>
                            </div>
                        </div>
                    </th>
                    <th class="header-aksi text-center" colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php
            include '../koneksi.php';
            // Menangani parameter pengurutan dari query string
            $column = isset($_GET['column']) ? $_GET['column'] : 'judul'; // Kolom default: judul
            $order = isset($_GET['order']) ? $_GET['order'] : 'asc'; // Urutan default: ascending

            // Query SQL dengan pengurutan dinamis
            $sql = "SELECT * FROM pengumuman ORDER BY $column $order";
            $data = mysqli_query($koneksi, $sql);
            $i = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM pengumuman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <th><?php echo $i++; ?></th>
                    <th><?php echo $d['judul']; ?></th>
                    <th><?php echo $d['dekripsi']; ?></th>
                    <th><?php echo $d['tanggal']; ?></th>
                    <th><?php echo $d['status']; ?>
                    <!-- Tombol untuk memperbarui status -->
                        <button class="btn btn-warning" onclick="showUpdateModal('<?php echo $d['id']; ?>', '<?php echo $d['status']; ?>')">
                            Perbarui
                        </button>
                    </th>
                    <th class='text-center' width='100'>
                        <a href='pengumuman_edit.php?id=<?php echo $d['id']; ?>' class='btn btn-success'>Edit</a>
                    </th>
                    <th class='text-center' width='100'>
                        <button class='btn btn-danger' onclick="showDeleteModal('<?php echo $d['id']; ?>')">Hapus</button>
                    </th>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>


</div>
</div>


<!-- JavaScript untuk  pengurutan -->
<script>
    function sortData(column, order) {
        // Kirim data pengurutan ke server menggunakan AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "sort_data.php?column=" + column + "&order=" + order, true);
        xhr.onload = function() {
            if (xhr.status == 200) {
                // Menampilkan hasil pengurutan (update tabel)
                document.getElementById('dataTable').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
</script>

<!-- Modal Konfirmasi Pembaruan Status -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModalLabel">Konfirmasi Perubahan Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateStatusForm">
                    <div class="form-group">
                        <label for="status">Pilih Status Baru</label>
                        <select class="form-control" id="statusSelect">
                            <option value="Aktif">Aktif</option>
                            <option value="Nonaktif">Nonaktif</option>
                        </select>
                    </div>
                </form>
                <p id="modalMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmUpdateStatus">Perbarui Status</button>
            </div>
        </div>
    </div>
</div>

<script>
    let selectedRowId = null; // Menyimpan ID pengumuman yang dipilih

    // Fungsi untuk membuka modal dan menampilkan status saat ini
    function showUpdateModal(id, currentStatus) {
        selectedRowId = id; // Menyimpan ID baris
        document.getElementById('statusSelect').value = currentStatus; // Mengatur nilai status di select

        // Menampilkan modal
        $('#statusModal').modal('show');
    }

    // Fungsi untuk memperbarui status
    document.getElementById('confirmUpdateStatus').addEventListener('click', function() {
        const newStatus = document.getElementById('statusSelect').value; // Mendapatkan status yang dipilih

        // Melakukan update status ke database menggunakan AJAX
        updateStatus(selectedRowId, newStatus);

        // Menutup modal setelah update
        $('#statusModal').modal('hide');
    });

    // Fungsi untuk mengupdate status di basis data
    function updateStatus(id, status) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "update_status.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert('Status berhasil diperbarui!');
                // Optionally: reload or update the page content dynamically
            }
        };
        // Mengirim ID dan status baru ke server
        xhr.send("id=" + id + "&status=" + status);
    }
</script>


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
        document.getElementById('confirmDeleteBtn').href = 'Hapus_pengumuman.php?kode=' + id;
        
        // Tampilkan modal
        $('#deleteModal').modal('show');
    }

$(document).ready(function() {
    // Mengubah status pengumuman saat dropdown berubah
    $('.status').change(function() {
        var id = $(this).data('id');  // Mengambil id pengumuman dari atribut data-id
        var status = $(this).val();   // Mengambil nilai status yang dipilih

        // Mengirim data ke server menggunakan AJAX
        $.ajax({
            url: 'update_status.php',  // Halaman yang akan menangani perubahan status
            method: 'POST',
            data: {
                id: id,
                status: status
            },
            success: function(response) {
                // Menampilkan pesan atau update status yang sukses
                alert('Status pengumuman berhasil diperbarui!');
            },
            error: function() {
                alert('Terjadi kesalahan saat memperbarui status.');
            }
        });
    });
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

<!-- Bootstrap CSS -->
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome CSS untuk ikon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<!-- jQuery dan Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
