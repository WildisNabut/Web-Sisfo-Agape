<?php
include "../koneksi.php";

// Ambil data dari POST
$Username_Lama = $_POST['Username_Lama'];
$Username_Baru = trim($_POST['Username_Baru']);
$Password = trim($_POST['Password']);
$Level = $_POST['Level'];

// Validasi input
if (empty($Username_Lama) || empty($Level)) {
    header('location:akun.php?error=Data tidak lengkap');
    exit();
}

try {
    // Mulai transaksi
    $koneksi->begin_transaction();

    // Mengupdate level saja jika tidak ada perubahan pada username dan password
    if (empty($Username_Baru) && empty($Password)) {
        $query = $koneksi->prepare("UPDATE `akun` SET `level` = ? WHERE `username` = ?");
        $query->bind_param("is", $Level, $Username_Lama);

    } elseif (!empty($Username_Baru) && empty($Password)) {
        // Update username dan level
        $query = $koneksi->prepare("UPDATE `akun` SET `username` = ?, `level` = ? WHERE `username` = ?");
        $query->bind_param("sis", $Username_Baru, $Level, $Username_Lama);

        // Update username di tabel terkait
        $relasiTables = ['murid', 'guru']; // Daftar tabel yang memiliki kolom `username`
        foreach ($relasiTables as $table) {
            $relasiQuery = $koneksi->prepare("UPDATE `$table` SET `username` = ? WHERE `username` = ?");
            $relasiQuery->bind_param("ss", $Username_Baru, $Username_Lama);
            $relasiQuery->execute();
        }

    } elseif (empty($Username_Baru) && !empty($Password)) {
        // Update password dan level
        $hashedPassword = password_hash($Password, PASSWORD_BCRYPT);
        $query = $koneksi->prepare("UPDATE `akun` SET `password` = ?, `level` = ? WHERE `username` = ?");
        $query->bind_param("sis", $hashedPassword, $Level, $Username_Lama);

    } else {
        // Update username, password, dan level
        $hashedPassword = password_hash($Password, PASSWORD_BCRYPT);
        $query = $koneksi->prepare("UPDATE `akun` SET `username` = ?, `password` = ?, `level` = ? WHERE `username` = ?");
        $query->bind_param("ssis", $Username_Baru, $hashedPassword, $Level, $Username_Lama);

        // Update username di tabel terkait
        $relasiTables = ['murid', 'guru']; // Daftar tabel yang memiliki kolom `username`
        foreach ($relasiTables as $table) {
            $relasiQuery = $koneksi->prepare("UPDATE `$table` SET `username` = ? WHERE `username` = ?");
            $relasiQuery->bind_param("ss", $Username_Baru, $Username_Lama);
            $relasiQuery->execute();
        }
    }

    // Eksekusi query utama
    if (!$query->execute()) {
        throw new Exception("Gagal memperbarui data akun: " . $query->error);
    }

    // Commit perubahan
    $koneksi->commit();

    header('location:akun.php?success=Data berhasil diperbarui');
} catch (Exception $e) {
    // Rollback jika ada error
    $koneksi->rollback();
    header('location:akun.php?error=' . urlencode($e->getMessage()));
}
?>
