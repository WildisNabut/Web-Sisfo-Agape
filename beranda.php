  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include ('navbar.php'); ?> 
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

  <h4 class="modal-title mx-auto">Data Renungan</h4>

  <!-- Message Icon with separator -->
  <a class="nav-link" href="pesan.php">
    <i class="fas fa-envelope fa-fw"></i>
    <!-- Counter - Messages (Optional) -->
  </a>

  <!-- Divider between Message and User icons -->
  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- User Dropdown (aligned to right) -->
  <ul class="navbar-nav ml-auto">
          <?php
		@session_start();
		if (empty($_SESSION['username'])) {
			echo "
			<ul class='agile_forms'>
				<li><a class='active' href='#' data-toggle='modal' data-target='#myModal2'><i class='fa fa-sign-in' aria-hidden='true'></i> Masuk </a></li>
			</ul>";
		} else {
			echo "
			<ul class='agile_forms'>
				<div class='dropdown'>
					<button class='btn btn-success dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
						<i class='fa fa-user' aria-hidden='true'></i> $_SESSION[username] <span class='caret'></span>
					</button>
					<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
						<table class='table'>
			";

			if ($_SESSION['level'] == "admin") {
				echo "
							<tr>
								<td><a class='dropdown-item' href='Admin'><i class='fa fa-home' aria-hidden='true'></i> Dashboard </a></td>
							</tr>
				";
			} else if ($_SESSION['level'] == "guru") {
				echo "
							<tr>
								<td><a class='dropdown-item' href='Guru'><i class='fa fa-pencil-alt' aria-hidden='true'></i>Dashboard</a></td>
							</tr>
				";
			} else {
				echo "
							<tr>
								<td><a class='dropdown-item' href='Murid'><i class='fa fa-check-circle' aria-hidden='true'></i>Lihat Tugas </a></td>
							</tr>
				";
			}

			echo "
							 <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='userDropdown'>
								<a class='dropdown-item' href='#' data-toggle='modal' data-target='#logoutModal'>
								<i class='fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>Logout
								</a>
							</div>
						</table>
					</div>
				</div>
			</ul>";
		}
		?>
			</ul>
</nav>

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
            <a id="confirmLogoutBtn" href="../Admin/logout.php" class="btn btn-primary">
            <i class="fa fa-sign-out-alt mr-2"></i> Ya, Keluar</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
   

<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Masuk</h3>	
					<div class="login-form">
						<form action="proses_login.php" method="post">
							<input type="text" name="username" placeholder="Username" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<div class="tp">
								<input type="submit" value="Masuk">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
						<a href="#"><i class="fa fa-facebook icon-small"></i></a>
						<a href="#"><i class="fa fa-youtube icon-small"></i></a>
						<a href="https://www.instagram.com/smpkagapeindah?igsh=MThtejJxN3Ywem54aw==">
							<i class="fa fa-instagram icon-small"></i>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->	