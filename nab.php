<?php
@session_start();
if (empty($_SESSION['username'])) {
    echo "
    <ul class='nav'>
        <li class='Navigasi-item'>
        <button type='button' class='btn btn-outline-primary mr-4' data-bs-toggle='modal' data-bs-target='#myModal2'>Login</button>        </button>
    </li> 
    </ul>";
} else {
    echo "
    <ul class='nav'>
        <li class='Navigasi-item dropdown'>
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
.Navigasi-item.dropdown .dropdown-header {
    background-color: #f0f0f0;
    padding: 20px 15px;
    font-size: 18px;
    font-weight: bold;
    color: #333;
    border-bottom: 2px solid #ddd;
}

/* Membuat icon username dengan warna biru dan penataan lebih elegan */
.Navigasi-item.dropdown .dropdown-header i {
    color: #007bff;
    margin-right: 10px;
}

/* Menambahkan garis pembatas dengan jarak yang rapat */
.Navigasi-item.dropdown .dropdown-menu .dropdown-item {
    border-bottom: 1px solid #ddd;
    padding: 15px 15px;
}

/* Menghapus garis pembatas dari item terakhir */
.Navigasi-item.dropdown .dropdown-menu .dropdown-item:last-child {
    border-bottom: none;
}

/* Efek hover pada item dropdown */
.Navigasi-item.dropdown .dropdown-menu .dropdown-item:hover {
    background-color: #f0f0f0;
    color: #333;
}

/* Gaya untuk item dropdown dengan icon */
.Navigasi-item.dropdown .dropdown-menu .dropdown-item i {
    margin-right: 10px;
}

.Navigasi-item.dropdown .dropdown-menu {
    position: absolute;
    left: -140px;
    right: 0;
    width: 200px;
    padding: 0;
}

/* Gaya untuk profil ikon pada ukuran layar biasa */
.Navigasi-item.dropdown .profile-icon {
    width: 40px;
    height: 40px;
}

/* Menyesuaikan ukuran profil ikon ketika layar lebih kecil dari 768px */
@media (max-width: 768px) {
    /* Profil Icon */
    .Navigasi-item.dropdown .profile-icon {
        width: 30px;  /* Ukuran lebih kecil */
        height: 30px; /* Ukuran lebih kecil */
    }

    /* Ukuran font dan padding pada dropdown header */
    .Navigasi-item.dropdown .dropdown-header {
        padding: 15px 10px;
        font-size: 16px; /* Ukuran font lebih kecil */
    }

    /* Menyesuaikan dropdown menu */
    .Navigasi-item.dropdown .dropdown-menu {
        width: 180px; /* Lebar dropdown lebih kecil */
    }

    /* Mengurangi jarak antar item dropdown */
    .Navigasi-item.dropdown .dropdown-menu .dropdown-item {
        padding: 12px 10px; /* Padding lebih kecil */
    }

    /* Mengurangi ukuran font pada item dropdown */
    .Navigasi-item.dropdown .dropdown-menu .dropdown-item {
        font-size: 14px; /* Ukuran font lebih kecil */
    }

    /* Mengurangi jarak antara icon dan teks */
    .Navigasi-item.dropdown .dropdown-menu .dropdown-item i {
        margin-right: 8px;
    }
}

* Gaya untuk profil ikon pada ukuran layar biasa */
.Navigasi-item.dropdown .profile-icon {
    width: 40px; /* Ukuran default pada layar besar */
    height: 40px; /* Ukuran default pada layar besar */
    font-size: 18px; /* Ukuran font default untuk teks dalam ikon */
}

/* Menyesuaikan ukuran profil ikon ketika layar lebih kecil dari 768px */
@media (max-width: 768px) {
    .Navigasi-item.dropdown .profile-icon {
        width: 30px;  /* Ukuran lebih kecil pada layar kecil */
        height: 30px; /* Ukuran lebih kecil pada layar kecil */
        font-size: 14px; /* Ukuran font lebih kecil dalam ikon */
    }
}
</style>