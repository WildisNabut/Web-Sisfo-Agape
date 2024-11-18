<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query($koneksi, "delete from pengumuman where id='$Kode'");
header('location:pengumuman.php');
?>