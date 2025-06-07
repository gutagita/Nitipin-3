<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Order</title>
  <link href="assets/img/blog/logobiru.png" rel="icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 20px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background: #f9ffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(1, 3, 3, 0.2);
      border-radius: 10px;
    }

    input, textarea, select {
    width: 100%; /* Atur lebar elemen */
    box-sizing: border-box; /* Pastikan padding dihitung dalam lebar */
    padding: 10px; /* Konsistensi padding */
    margin-bottom: 15px; /* Jarak antar elemen */
    border: 1px  solid #7acbcc ; /* Border */
    border-radius: 10px; /* Sudut melengkung */
    resize: none; /* Nonaktifkan resize untuk textarea */
}
  
    button {
      background-color: #207c7d;
      border-radius: 10px;
      padding: 10px 20px;
      justify-content: center;
      color: #fff;
      border: none;
      cursor: pointer;;
    }

    button:hover {
      background-color: #31bfc2;
    }

    label {
      margin-bottom: 10px;
      display: block; /* Agar label berada di atas input */
      font-size: small;
    }
  </style>
</head>
<body>
  <h1 style="text-align: center;">Form Order</h1>
  <form class="px-5" method="post" action="order.php">
    <label for="phone">Nomor HP</label>
    <input type="number" id="phone" name="phone" placeholder="Masukkan nomor HP" required>

    <label  for="address">Alamat</label>
    <textarea id="address" name="address" placeholder="Masukkan alamat lengkap"  required></textarea>

    <label for="category">Kategori</label>
    <select id="category" name="category" required>
      <option value="" disabled selected>Pilih kategori</option>
      <option value="kategori1">Small</option>
      <option value="kategori2">Medium</option>
      <option value="kategori3">Large</option>
    </select>

    <label for="duration">Lama Taruh (Hari)</label>
    <input type="number" id="duration" name="duration" placeholder="Masukkan jumlah hari" min="1" required>

    <!-- <button type="submit" class="mx-auto px-auto">Kirim Pesanan</button> -->
<?php if (isset($_SESSION['username'])): ?>
  <button type="submit" class="mx-auto px-auto">Kirim Pesanan</button>
<?php else: ?>
  <a class="btn-getstarted" href="login.php">Silahkan Login Terlebih Dahulu</a>
<?php endif; ?>
  </form>
</body>
</html>