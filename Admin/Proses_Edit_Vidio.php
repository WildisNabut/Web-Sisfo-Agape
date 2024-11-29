<?php
include('../koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_vidio = $_POST['id_vidio'] ?? '';
    $judul = $_POST['judul'] ?? '';
    $url_vidio = $_POST['url_vidio'] ?? '';

    if (empty($id_vidio) || empty($judul) || empty($url_vidio)) {
        echo "Form tidak lengkap.";
        exit();
    }

    $judul = mysqli_real_escape_string($koneksi, $judul);
    $url_vidio = mysqli_real_escape_string($koneksi, $url_vidio);

    $query = "UPDATE vidio SET judul = '$judul', url_vidio = '$url_vidio' WHERE id_vidio = '$id_vidio'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: vidio.php?status=success");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
        echo "<br>Query: $query";
        exit();
    }
}

header("Location: vidio.php");
exit();
