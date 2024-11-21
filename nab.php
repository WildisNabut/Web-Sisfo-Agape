<?php
@session_start();
if (empty($_SESSION['username'])) {
    echo "
    <ul class='nav'>
        <li class='nav-item'>
        <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#myModal2'>
            <i class='fa' aria-hidden='true'>Login</i>
        </button>
    </li> 
    </ul>";
} else {
    echo "
    <ul class='nav'>
        <li class='nav-item dropdown'>
        <a class='nav-link user-dropdown' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                <div class='profile-icon rounded-circle d-flex justify-content-center align-items-center' style='width: 40px; height: 40px; background-color: #366273; color: white;'>
                ";
                // Show the first 2 letters of the username
                echo strtoupper(substr($_SESSION['username'], 0, 2));
    echo "
            </div>
        </a>
            <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
    ";

    echo "
            <li class='dropdown-header'>
               <i class='fa fa-user' style='color:blue'></i>$_SESSION[username]
            </li>
    ";

    if ($_SESSION['level'] == "admin") {
        echo "
                <li>
                    <a class='dropdown-item' href='Admin'>
                        <i class='fa fa-home' aria-hidden='true'></i> Dashboard
                    </a>
                </li>
        ";
    } else if ($_SESSION['level'] == "guru") {
        echo "
                <li>
                    <a class='dropdown-item' href='Guru'>
                        <i class='fa fa-home-alt' aria-hidden='true'></i> Dashboard
                    </a>
                </li>
        ";
    } else {
        echo "
                <li>
                    <a class='dropdown-item' href='Murid'>
                        <i class='fa fa-check-circle' aria-hidden='true'></i> Lihat Tugas
                    </a>
                </li>
        ";
    }

    echo "
                <li>
                    <a class='dropdown-item text-danger' href='#' data-bs-toggle='modal' data-bs-target='#logoutModal'>
                        <i class='fa fa-sign-out-alt fa-sm fa-fw me-2'></i> Logout
                    </a>
                </li>
            </ul>
        </li>
    </ul>";
}
?>
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
            <a href="index.php">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              </a>
            </div>
        </div>
    </div>
</div>
   
<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- Modal content -->
    <div class="modal-content">
    <div class="modal-header justify-content-center">
          <i class="fas fa-sign-in-alt text-danger" style="font-size: 3rem;"></i>
      </div>
      <div class="modal-body">
        <div class="signin-form profile">
          <div class="login-form">
            <form action="proses_login.php" method="post">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
              </div>
              <div class="form-group d-flex justify-content-center">
                <!-- Masuk Button -->
                <button type="submit" class="btn btn-primary mr-2">Masuk</button>
                <!-- Batal Button -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='index.php';">Batal</button>
              </div>
            </form>
          </div>
          <p class="text-center"><a href="#" data-toggle="modal" data-target="#myModal3">Hubungi Admin Jika Kamu Belum Memiliki Akun</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- //Modal1 -->

<style>
    /* Menambah ukuran font dan padding untuk .dropdown-header */
    .nav-item.dropdown .dropdown-header {
        background-color: #f0f0f0; /* Warna latar belakang elegan */
        padding: 20px 15px; /* Menambah padding agar lebih besar */
        font-size: 18px; /* Ukuran font lebih besar */
        font-weight: bold; /* Menambah ketebalan font */
        color: #333; /* Mengubah warna teks */
        border-bottom: 2px solid #ddd; /* Garis pembatas lebih tebal */
    }

    /* Membuat icon username dengan warna biru dan penataan lebih elegan */
    .nav-item.dropdown .dropdown-header i {
        color: #007bff; /* Warna biru pada icon */
        margin-right: 10px;
    }

    /* Menambahkan garis pembatas dengan jarak yang rapat */
    .nav-item.dropdown .dropdown-menu .dropdown-item {
        border-bottom: 1px solid #ddd;
        padding: 15px 15px; /* Mengurangi jarak antara item */
    }

    /* Menghapus garis pembatas dari item terakhir */
    .nav-item.dropdown .dropdown-menu .dropdown-item:last-child {
        border-bottom: none;
    }

    /* Efek hover pada item dropdown */
    .nav-item.dropdown .dropdown-menu .dropdown-item:hover {
        background-color: #f0f0f0; /* Warna latar belakang saat hover */
        color: #333; /* Mengubah warna teks saat hover */
    }

    /* Gaya untuk item dropdown dengan icon */
    .nav-item.dropdown .dropdown-menu .dropdown-item i {
        margin-right: 10px; /* Jarak antara icon dan teks */
    }
    .nav-item.dropdown .dropdown-menu {
        position: absolute;
        left: -140px;
        right: 0;
        width: 200px; /* Menyesuaikan lebar dropdown */
        padding: 0;
    }

</style>



