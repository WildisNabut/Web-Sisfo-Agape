<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigasi Responsif</title>
  <!-- Menambahkan Font Awesome untuk ikon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
	


  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    nav {
      background-color: #004080;
      color: #fff;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      display: flex;
      align-items: center;
      font-size: 1.2em;
      font-weight: bold;
    }
    .logo img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }
    .nav-links {
      list-style: none;
      display: flex;
      margin: 0;
      padding: 0;
    }
    .nav-links li {
      position: relative;
      margin-left: 20px;
    }
    .nav-links a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      display: block;
      position: relative;
    }
    .nav-links a:hover {
      color: #ffcc00;
    }

    /* Efek garis bawah berjalan */
    .nav-links a::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 2px;
      background-color: #ffcc00;
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .dropdown {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #003366;
      list-style: none;
      padding: 0;
      margin: 0;
      width: 200px;
      z-index: 1000;
      transition: max-height 0.3s ease, opacity 0.3s ease;
    }
    .dropdown li {
      width: 100%;
    }
    .dropdown a {
      padding: 10px;
      color: #fff;
    }
    .nav-links li.open .dropdown {
      max-height: 300px;
      opacity: 1;
    }

    .hamburger {
      display: none;
    }

    .toggle-icon {
      float: right;
      margin-left: 10px;
      font-weight: bold;
      user-select: none; /* Disable text selection */
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #004080;
      }
      .nav-links li {
        margin: 0;
      }
      .nav-links.active {
        display: flex;
      }
      .hamburger {
        display: block;
      }
    }
  </style>
</head>
<body>
  <nav>
    <div class="logo">
      <img src="logo_agape.png" alt="Logo">
      SMP AGAPE INDAH
    </div>
    <div class="hamburger" onclick="toggleMenu()">☰</div>
    <ul class="nav-links">
      <li><a href="index.php">Beranda</a></li>
      <li>
        <a href="#" onclick="toggleDropdown(event, this)">Informasi<span class="toggle-icon">+</span></a>
        <ul class="dropdown">
          <li><a href="#">Pengumuman</a></li>
          <li><a href="#">Kegiatan</a></li>
        </ul>
      </li>

      <li><a href="#">Galery</a></li>
      <li><a href="Renungan.php">Renungan</a></li>
      <li><a href="fasilitas.php">Fasilitas</a></li>
      <li>
        <a href="#" onclick="toggleDropdown(event, this)">Profil <span class="toggle-icon">+</span></a>
        <ul class="dropdown">
          
          <li><a href="renungan.php">Sejarah</a></li>
          <li><a href="visi-misi.php">Visi & Misi</a></li>
          <li><a href="#">Struktur Organisasi</a></li>
        </ul>
      </li>
      <li><a href="mail.php">Kontak</a></li>

   
      <!-- Menu dropdown untuk Masuk -->
      <li>
        <a href="#" onclick="toggleDropdown(event, this)">Masuk <span class="toggle-icon">+</span></a>
        <ul class="dropdown">
          <li><a href="login.php">Guru <i class="fas fa-chalkboard-teacher"></i></a></li>
          <li><a href="login.php">Admin <i class="fas fa-user-shield"></i></a></li>
          <li><a href="login.php">Murid <i class="fas fa-user-graduate"></i></a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <script>
    function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.classList.toggle('active');
    }

    function toggleDropdown(event, element) {
      event.stopPropagation(); // Stop click event from bubbling up
      const parentLi = element.parentElement;
      const isOpen = parentLi.classList.contains('open');
      
      // Close all dropdowns before opening the clicked one
      closeAllDropdowns();

      // If the clicked dropdown was not already open, open it
      if (!isOpen) {
        parentLi.classList.add('open');
        // Update the toggle icon
        const icon = element.querySelector('.toggle-icon');
        icon.textContent = "–"; // Minus icon
      } else {
        parentLi.classList.remove('open');
        const icon = element.querySelector('.toggle-icon');
        icon.textContent = "+"; // Plus icon
      }
    }

    function closeAllDropdowns() {
      document.querySelectorAll('.nav-links li.open').forEach(item => {
        item.classList.remove('open');
        const icon = item.querySelector('.toggle-icon');
        if (icon) icon.textContent = "+"; // Reset icon to plus
      });
    }

    // Close dropdowns and menu when clicking outside
    document.addEventListener('click', function(event) {
      const nav = document.querySelector('nav');
      const dropdowns = document.querySelectorAll('.nav-links li.open');
      
      // Check if the click is outside of the nav
      if (!nav.contains(event.target)) {
        closeAllDropdowns();
        // Close mobile menu if open
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.remove('active');
      }
    });

    // Prevent dropdown from closing when clicking inside it
    document.querySelectorAll('.nav-links li').forEach(item => {
      item.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent click from propagating to document
      });
    });
  </script>

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

