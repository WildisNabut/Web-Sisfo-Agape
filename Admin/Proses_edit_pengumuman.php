<?php
include('../koneksi.php');

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $dekripsi = mysqli_real_escape_string($koneksi, $_POST['dekripsi']);  // Menggunakan 'dekripsi' untuk deskripsi
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);

    // Validasi data (misalnya, memastikan 'judul' tidak kosong)
    if (empty($judul)) {
        echo "<script>alert('Judul tidak boleh kosong.'); window.location.href='pengumuman_edit.php?kode=$judul';</script>";
        exit;
    }

    // Update data di database
    $update = mysqli_query($koneksi, "UPDATE pengumuman SET judul = '$judul', dekripsi = '$dekripsi', tanggal = '$tanggal', status = '$status' WHERE id = '$id'");

    if ($update) {
        echo "<script>alert('Data pengumuman berhasil diupdate.'); window.location.href='pengumuman.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data pengumuman.'); window.location.href='pengumuman_edit.php?kode=$judul';</script>";
    }
} else {
    // Jika tidak melalui metode POST, alihkan ke halaman pengumuman
    header("Location: pengumuman.php");
    exit;
}
?>
