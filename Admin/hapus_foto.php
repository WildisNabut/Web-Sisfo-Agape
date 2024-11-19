<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query($koneksi, "delete from foto where id_foto='$Kode'");
header('location:foto.php');
?>