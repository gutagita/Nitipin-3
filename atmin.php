<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Titipan Barang</title>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 8px 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f3f3f3;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Daftar Titipan Barang</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Tanggal Pesan</th>
            <th>Durasi (hari)</th>
            <th>Jumlah</th>
            <th>No. Telp</th>
            <th>Alamat</th>
            <th>Catatan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM penitipan";
        $stmt = $pdo->query($sql); // Gunakan $pdo (bukan $conn)

        $no = 1;
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($data) > 0):
            foreach ($data as $row):
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['nama_barang']) ?></td>
            <td><?= htmlspecialchars($row['kategori_barang']) ?></td>
            <td><?= $row['tanggal_pesan'] ?></td>
            <td><?= $row['durasi'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= htmlspecialchars($row['no_telp']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['alamat'])) ?></td>
            <td><?= nl2br(htmlspecialchars($row['catatan'])) ?></td>
            <td><?= htmlspecialchars($row['status']) ?></td>
            <td>
                <?php if ($row['status'] === 'dalam proses'): ?>
                    <form method="post" action="change_status.php" onsubmit="return confirm('Selesaikan titipan ini?');">
                        <input type="hidden" name="titip_id" value="<?= $row['titip_id'] ?>">
                        <button type="submit">Selesaikan</button>
                    </form>
                <?php else: ?>
                    -
                <?php endif; ?>
            </td>
        </tr>
        <?php
            endforeach;
        else:
        ?>
        <tr><td colspan="11" style="text-align:center;">Tidak ada data</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
