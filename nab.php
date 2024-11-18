
<?php
@session_start();
if (empty($_SESSION['username'])) {
    echo "
    <ul class='nav'>
        <li class='nav-item'>
            <a class='nav-link active' href='#' data-bs-toggle='modal' data-bs-target='#myModal2'>
                <i class='fa fa-sign-in' aria-hidden='true'></i> Masuk
            </a>
        </li> 
    </ul>";
} else {
    echo "
    <ul class='nav'>
        <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle user-dropdown' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                <i class='fa fa-user' aria-hidden='true'></i> $_SESSION[username]
            </a>
            <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
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
                        <i class='fa fa-pencil-alt' aria-hidden='true'></i> Dashboard
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




