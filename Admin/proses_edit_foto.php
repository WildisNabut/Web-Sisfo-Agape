<?php
include('../koneksi.php');

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_foto = $_POST['id_foto']; // Ambil ID foto dari input hidden

    // Validasi ID foto
    $cek_foto = mysqli_query($koneksi, "SELECT * FROM foto WHERE id_foto = '$id_foto'");
    if (mysqli_num_rows($cek_foto) === 0) {
        echo "<script>alert('Error: ID foto tidak ditemukan.'); window.location.href='foto.php';</script>";
        exit();
    }

    // Cek apakah ada gambar baru yang diunggah
    $upload_file = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $file_name = $_FILES['gambar']['name'];
        $upload_dir = 'image/';
        $upload_file = $upload_dir . basename($file_name);

        // Validasi ekstensi file gambar
        $valid_extensions = ['jpg', 'jpeg', 'png'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $valid_extensions)) {
            echo "<script>alert('Error: Hanya file gambar dengan format JPG, JPEG, atau PNG yang diperbolehkan.'); window.location.href='foto.edit.php?id=$id_foto';</script>";
            exit();
        }

        // Pindahkan file ke folder tujuan
        if (!move_uploaded_file($file_tmp, $upload_file)) {
            echo "<script>alert('Error: Gagal mengunggah gambar.'); window.location.href='foto.edit.php?id=$id_foto';</script>";
            exit();
        }
    }

    // Siapkan query untuk update gambar
    if ($upload_file != '') {
        $query = "UPDATE foto SET gambar = ? WHERE id_foto = ?";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("si", $upload_file, $id_foto);
    } else {
        echo "<script>alert('Error: Tidak ada file yang diunggah.'); window.location.href='foto.edit.php?id=$id_foto';</script>";
        exit();
    }

    // Eksekusi query
    if ($stmt->execute()) {
        echo "<script>alert('Data foto berhasil diperbarui.'); window.location.href='foto.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data foto.'); window.location.href='foto.edit.php?id=$id_foto';</script>";
    }

    // Menutup statement
    $stmt->close();
}
?>
