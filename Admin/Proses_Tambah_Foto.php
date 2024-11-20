<?php
include('../koneksi.php');

// Buffer output untuk mencegah masalah header
ob_start();

// Mengecek apakah ada file yang diunggah
if (isset($_FILES['gambar']['name']) && count($_FILES['gambar']['name']) > 0) {
    $total_files = count($_FILES['gambar']['name']); // Total file yang diunggah
    $upload_dir = 'image/'; // Folder tujuan upload

    for ($i = 0; $i < $total_files; $i++) {
        // Informasi file
        $file_tmp = $_FILES['gambar']['tmp_name'][$i];
        $file_name = $_FILES['gambar']['name'][$i];
        $file_size = $_FILES['gambar']['size'][$i];
        $file_type = $_FILES['gambar']['type'][$i];

        // Validasi ekstensi file
        $valid_extensions = ['jpg', 'jpeg', 'png'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ukuran file (maksimal 2MB)
        $max_file_size = 2 * 1024 * 1024; // 2MB

        if (!in_array($file_ext, $valid_extensions)) {
            // Jika ekstensi tidak valid, lanjut ke file berikutnya
            continue;
        }

        if ($file_size > $max_file_size) {
            // Jika ukuran file terlalu besar, lanjut ke file berikutnya
            continue;
        }

        // Path tujuan upload
        $upload_file = $upload_dir . basename($file_name);

        // Memindahkan file ke folder
        if (move_uploaded_file($file_tmp, $upload_file)) {
            // Simpan path ke database
            $stmt = $koneksi->prepare("INSERT INTO foto (gambar) VALUES (?)");
            $stmt->bind_param("s", $upload_file);
            $stmt->execute();
            $stmt->close();
        }
    }
    // Setelah semua proses selesai, alihkan ke foto.php
    header("Location: foto.php");
    exit(); // Menghentikan eksekusi lebih lanjut
} else {
    echo "Error: Tidak ada file yang diunggah.";
}

// Mengakhiri buffer output
ob_end_flush();
?>
