    <!-- Sidebar -->
    <?php include ('navbar.php'); ?> 
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top " style="background-color: #ffffff;">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <h5 class="modal-title mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: bold; font-style: italic; color: #fff; pointer-events: none;">
    <i class="fas fa-book-open" style="color: #3498db;"></i> SMP AGAPE INDAH
</h5>
  <!-- Divider between Message and User icons -->
  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- User Dropdown (aligned to right) -->
  <ul class="navbar-nav ml-auto" style="color: black; padding: 10px;">
    <div style="font-size: 0.9rem; line-height: 1.5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
      <!-- Include Profile/Dropdown Content -->
      <?php include('nab.php'); ?>
    </div>
  </ul>
</nav>

<!-- End of Topbar -->
  <!-- Begin Page Content -->
  <div class="container-fluid bg-white" style="margin-top: -24px; margin-right: -24px; padding-right: 0; padding-left: 0;">  
    <div class="scrollable-content">

    <style>
  .scrollable-content {

    height: 620px; /* Atur tinggi sesuai kebutuhan */
    overflow-y: scroll; /* Membuat konten bisa digulir secara vertikal */
  }

  /* CSS untuk memberikan border pada tombol navigasi */

.navbar {
    border-bottom: 2px solid #000; /* Garis border di bawah dengan warna biru */
    padding-bottom: 5px; /* Memberikan ruang agar border terlihat dengan jelas */
    transition: all 0.3s ease; /* Menambahkan animasi transisi */
}

/* CSS untuk container navigasi */
.container-fluid {
    padding-left: 15px; /* Jarak di sebelah kiri */
    padding-right: 15px; /* Jarak di sebelah kanan */
}


</style>