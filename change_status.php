<?php
include 'koneksi.php';

// Cek apakah data dikirim lewat POST dan titip_id ada
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titip_id'])) {
    $titip_id = $_POST['titip_id'];

    try {
        // Update status menjadi "selesai"
        $sql = "UPDATE penitipan SET status = :status WHERE titip_id = :titip_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':status' => 'selesai',
            ':titip_id' => $titip_id
        ]);

        header("Location: atmin.php");
        exit;
    } catch (PDOException $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
} else {
    echo "Permintaan tidak valid.";
}
