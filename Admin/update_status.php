<?php
// update_status.php

include('../koneksi.php'); // Pastikan koneksi ke database sudah benar

// Cek apakah parameter 'id' dan 'status' sudah diterima
if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Query untuk memperbarui status
    $query = "UPDATE pengumuman SET status = ? WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $query);

    // Bind parameter
    mysqli_stmt_bind_param($stmt, "si", $status, $id);

    // Eksekusi query
    if (mysqli_stmt_execute($stmt)) {
        echo "Status berhasil diperbarui!";
    } else {
        echo "Gagal memperbarui status.";
    }

    // Menutup statement
    mysqli_stmt_close($stmt);
} else {
    echo "Data tidak lengkap.";
}

// Menutup koneksi
mysqli_close($koneksi);
?>
