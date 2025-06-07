<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $no_hp = $_POST["no_hp"];
    $tipe = "user";

    // Hash password (keamanan)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Cek apakah username atau email sudah dipakai
        $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        $existing = $stmt->fetch();

        if ($existing) {
            echo "Username atau email sudah digunakan.";
        } else {
            // Masukkan data ke database
            $stmt = $pdo->prepare("INSERT INTO user (username, email, password, nomor_wa, tipe) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$username, $email, $hashed_password, $no_hp, $tipe]);

            echo "Signup berhasil! Silakan login.";
            header("Location:login.php");
        }

    } catch (PDOException $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
} else {
    echo "Akses tidak valid.";
}
?>
