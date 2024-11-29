<?php
include('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_struktur = $_POST['id_struktur'];
    
    // Ambil informasi file
    $gambarBaru = $_FILES['gambar']['name'];
    $gambarSementara = $_FILES['gambar']['tmp_name'];
    
    // Tentukan direktori tujuan
    $targetDir = "image/";
    $targetFile = $targetDir . basename($gambarBaru);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    // Ambil gambar lama dari database
    $querySelect = "SELECT gambar FROM struktur WHERE id_struktur='$id_struktur'";
    $result = mysqli_query($koneksi, $querySelect);
    $data = mysqli_fetch_array($result);
    $gambarLama = $data['gambar'];

    if (!empty($gambarBaru)) {
        // Validasi tipe file
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            if (move_uploaded_file($gambarSementara, $targetFile)) {
                $gambar = $targetFile; // Simpan gambar baru
            } else {
                echo "Gagal mengunggah gambar.";
                exit;
            }
        } else {
            echo "Format file tidak valid. Hanya JPG, JPEG, PNG, dan GIF diperbolehkan.";
            exit;
        }
    } else {
        $gambar = $gambarLama; // Jika tidak ada gambar baru, gunakan gambar lama
    }

    // Update data
    $queryUpdate = "UPDATE struktur SET gambar='$gambar' WHERE id_struktur='$id_struktur'";
    if (mysqli_query($koneksi, $queryUpdate)) {
        header("Location: struktur.php");
        exit;
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }
}
?>
