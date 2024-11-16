<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.php"><i class="fa fa-leanpub" aria-hidden="true"></i> SMP AGAPE INDAH</a></h1>

			</div>
			<div class="w3layouts_header_right ">
			    <form action="#" method="post">
					
					
				</form>
			</div>
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
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="effect-3">Beranda</a></li>

						<li> <a class='effect-3 scroll' data-toggle='dropdown'>Informasi<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
								<li><a href='pengumuman.php' >Pengumuman</a></li>
								<li><a href='kegiatan.php' >Kegiatan Sekolah</a></li>
							</ul>
						</li>


						<li> <a class='effect-3 scroll' data-toggle='dropdown'>Galery<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
								<li><a href='galeri_vidio.php' >Vidio</a></li>
								<li><a href='#' >Foto</a></li>
							</ul>
						</li>
						<li> <a class='effect-3 scroll' data-toggle='dropdown'>Motivasi<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
								<li><a href='renungan.php' >Renungan</a></li>
								<li><a href='kutipan.php' >Kutipan</a></li>
							</ul>
						</li>

						<li><a href="fasilitas.php" class="effect-3">Fasilitas </a></li>
						<li>
						<a href="profile_sekolah.php" class="effect-3">Profil Sekolah</a>
						</li>
						<li><a href="mail.php" class="effect-3">Kontak</a></li>
					</ul>
				</nav>
			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>

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

