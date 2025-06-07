 <?php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload mPDF

// Ambil data POST dari form
$barang = $_POST['nama_barang'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$jumlah = (int)($_POST['jumlah'] ?? 0);
$durasi = (int)($_POST['durasi'] ?? 0);
$telepon = $_POST['telepon'] ?? '';
$alamat = $_POST['alamat'] ?? '';

// Tentukan harga per hari berdasarkan kategori
switch ($kategori) {
  case 'small':
    $harga_per_hari = 2000;
    break;
  case 'medium':
    $harga_per_hari = 3000;
    break;
  case 'large':
    $harga_per_hari = 4000;
    break;
  default:
    $harga_per_hari = 0;
}

// Hitung total
$total = $jumlah * $durasi * $harga_per_hari;

// Buat konten HTML invoice
$html = "
<style>
  body { font-family: Arial, sans-serif; }
  .invoice { padding: 20px; border: 1px solid #ddd; max-width: 600px; margin: auto; }
  h2 { color: #004080; }
  p { font-size: 14px; }
  hr { border: none; border-top: 1px solid #ccc; margin: 20px 0; }
</style>
<div class='invoice'>
  <h2>Invoice Pemesanan Nitipin</h2>
  <p><strong>Barang:</strong> " . htmlspecialchars($barang) . "</p>
  <p><strong>Kategori:</strong> " . htmlspecialchars($kategori) . " - Rp" . number_format($harga_per_hari, 0, ',', '.') . "/hari</p>
  <p><strong>Jumlah:</strong> $jumlah</p>
  <p><strong>Durasi:</strong> $durasi hari</p>
  <p><strong>Alamat:</strong><br>" . nl2br(htmlspecialchars($alamat)) . "</p>
  <p><strong>Telepon:</strong> " . htmlspecialchars($telepon) . "</p>
  <hr>
  <h3>Total: Rp" . number_format($total, 0, ',', '.') . "</h3>
</div>
";

// Generate PDF dengan mPDF
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("invoice-nitipin.pdf", "D"); // Download file invoice-nitipin.pdf
exit;
