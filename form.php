<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Form Pemesanan</title>
<link href="assets/img/blog/logobiru.png" rel="icon">
<style>
  * {
    box-sizing: border-box;
  }
  body {
    font-family: 'Montserrat', sans-serif;
    background: linear-gradient(to right, #004080, #0059b3, #0073e6);
    margin: 0;
    min-height: 100vh;
    display: grid;
    place-items: center;
  }
  .container {
    display: flex;
    max-width: 700px;
    width: 100%;
    margin: 20px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    background: #fff;
  }
  .left-container {
    flex: 1;
    background: #0046c3;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 30px;
    text-align: center;
    gap: 10px;
  }
  .left-container h1 {
    font-size: 1.6rem;
    margin: 10px 0;
  }
  .left-container .logo-icon {
    font-size: 3.5rem;
    background: #F1F5F9;
    padding: 15px;
    border-radius: 0%;
  }
  .left-container img {
    width: 75%;
    margin-top: 15px;
    border-radius: 10px;
    filter: sepia(15%);
  }
  .right-container {
    flex: 1;
    padding: 30px;
  }
  .right-container h2 {
    margin-bottom: 20px;
    font-size: 1.4rem;
    text-align: center;
    font-weight: 700;
  }
  .input-group {
    margin-bottom: 15px;
  }
  .input-group input,
  .input-group select,
  .input-group textarea {
    width: 100%;
    padding: 10px 14px;
    font-size: 0.95rem;
    border-radius: 8px;
    border: 1px solid #ccc;
    background: #f0f4ff;
    resize: vertical;
    outline: none;
  }
  .input-group input:focus,
  .input-group select:focus,
  .input-group textarea:focus {
    border-color: #007bff;
  }
  button.submit-btn {
    width: 100%;
    background: linear-gradient(90deg, #0051b3, #007bff);
    border: none;
    padding: 12px;
    border-radius: 30px;
    color: white;
    font-weight: 700;
    font-size: 1rem;
    cursor: pointer;
  }
  button.submit-btn:hover {
    background: linear-gradient(90deg, #00419c, #006be0);
  }
  #notif {
    display: none;
    background-color: #d4edda;
    color: #155724;
    padding: 10px 20px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #c3e6cb;
    text-align: center;
    font-weight: bold;
  }
  @media (max-width: 700px) {
    .container {
      flex-direction: column;
      max-width: 90vw;
    }
    .left-container, .right-container {
      flex: none;
      width: 100%;
      padding: 30px 20px;
    }
    .left-container {
      border-radius: 12px 12px 0 0;
    }
    .right-container {
      border-radius: 0 0 12px 12px;
    }
  }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <div class="left-container">
      <h1>NITIPIN</h1>
      <p>Penitipan Aman, Asik, Amanah!</p>
       <!-- <div class="logo-icon">
        <img src="/assets/img/nitipin/logo (2).png" alt="Puppy" style="width: 80%; margin-top: 20px; border-radius: 10px; filter: sepia(20%)" />
      </div> -->
      <img src="/assets/img/gambar/kardus.png" alt="Puppy" style="width: 80%; margin-top: 20px; border-radius: 10px;" />
    </div>

    <div class="right-container">
      <h2>Form Pemesanan</h2>

    <!-- NOTIFIKASI DI ATAS FORM -->
    <?php if (isset($_SESSION['notif'])): ?>
      <div id="notif">
        <script>
          alert("<?php echo $_SESSION['notif']; ?>");
        </script>
      </div>
      <?php unset($_SESSION['notif']); ?>
    <?php endif; ?>

      <form id="form-pemesanan" action="proses_order.php" method="post">
        <div class="input-group">
          <input type="text" placeholder="Nama Barang" name="nama_barang" required/>
        </div>
        <div class="input-group">
          <select required name="kategori_barang">
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <div class="input-group">
          <input type="number" min="1" placeholder="Jumlah" name="jumlah" required />
        </div>
        <div class="input-group">
          <input type="number" min="1" placeholder="Durasi (Hari)" name="durasi" required />
        </div>
        <div class="input-group">
          <input type="text" placeholder="Nomor Telepon" name="no_telp" required />
        </div>
        <div class="input-group">
          <textarea rows="3" placeholder="Alamat Lengkap" name="alamat" required></textarea>
        </div>
        <div class="input-group">
          <textarea rows="3" placeholder="catatan (opsional)" name="catatan" ></textarea>
        </div>

        <?php if (isset($_SESSION['username'])): ?>
          <button type="submit" class="submit-btn">Pesan Sekarang</button>
        <?php else: ?>
          <a class="btn-getstarted" href="login.php">Silahkan Login Terlebih Dahulu</a>
        <?php endif; ?>
      </form>
    </div>
  </div>
</body>
</html>
