<?php
// update_status.php
include '../koneksi.php';

if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Update status di database
    $query = "UPDATE pengumuman SET status = '$status' WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Status berhasil diperbarui!";
    } else {
        echo "Terjadi kesalahan saat memperbarui status.";
    }
}
?>
