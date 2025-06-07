<?php
session_start();
include "koneksi.php";
if (!isset($pdo)) {
    die("Koneksi ke database gagal.");
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id         = $_SESSION['user_id'];
    $nama_barang     = $_POST['nama_barang'];
    $kategori_barang = $_POST['kategori_barang'];
    $jumlah          = $_POST['jumlah'];
    $durasi          = $_POST['durasi'];
    $no_telp         = $_POST['no_telp'];
    $alamat          = $_POST['alamat'];
    $status          = "dalam proses";
    $catatan         = isset($_POST['catatan']) ? $_POST['catatan'] : '';

    try {
    $sql = "INSERT INTO penitipan 
        (user_id, nama_barang, kategori_barang, jumlah, durasi, no_telp, alamat, status, catatan) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
    $stmt = $pdo->prepare($sql);
    $success = $stmt->execute([
        $user_id,
        $nama_barang,
        $kategori_barang,
        $jumlah,
        $durasi,
        $no_telp,
        $alamat,
        $status,
        $catatan
    ]);

    if ($success) {
        $_SESSION['notif'] = "Pemesanan berhasil!";
    } else {
        $_SESSION['notif'] = "Input gagal!";
    }

    header("Location: form.php");
    exit;
} catch (PDOException $e) {
    echo "Query error: " . $e->getMessage();
    exit;
}


} else {
    echo "Akses tidak valid.";
}
?>
