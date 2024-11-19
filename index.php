<?php
// Data barang (contoh, bisa berasal dari form atau array)//
$barang = [
    ["nama" => "Traffle Bread", "harga" => 50000, "jumlah" => 2],
    ["nama" => "Coklat Dubayy", "harga" => 30000, "jumlah" => 1],
    ["nama" => "Seblak Caviar", "harga" => 50000, "jumlah" => 1]
];

// Logika untuk menghitung total belanja dan diskon//
$totalBelanja = 0;
foreach ($barang as $item) {
    $totalBelanja += $item["harga"] * $item["jumlah"];
}

// Hitung diskon//
$diskon = 0;
if ($totalBelanja > 100000) {
    $diskon = $totalBelanja * 0.10; // 10% diskon//
}

// Total setelah diskon//
$totalSetelahDiskon = $totalBelanja - $diskon;

// Nama pembeli (contoh, diambil dari input)//
$namaPembeli = "Nuna Yoghi"; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kasir Sederhana Toko Sirqotul Uula</title>
    <link rel="stylesheet" href="style.css"> <!-- Hubungkan CSS -->
</head>
<body>
<div class="container">
    <h1>Sistem Kasir Sederhana Toko Sirqotul Uula</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga per Item</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($barang as $index => $item) {
                $totalHarga = $item["harga"] * $item["jumlah"];
                echo "<tr>
                    <td>" . ($index + 1) . "</td>
                    <td>{$item['nama']}</td>
                    <td>{$item['jumlah']}</td>
                    <td>Rp" . number_format($item['harga'], 0, ',', '.') . "</td>
                    <td>Rp" . number_format($totalHarga, 0, ',', '.') . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    <p class="total">Total Belanja: Rp<?php echo number_format($totalBelanja, 0, ',', '.'); ?></p>
    <p class="total">Diskon: Rp<?php echo number_format($diskon, 0, ',', '.'); ?></p>
    <p class="total">Total Setelah Diskon: Rp<?php echo number_format($totalSetelahDiskon, 0, ',', '.'); ?></p>

    <p class="thank-you">Terima kasih telah berbelanja, <?php echo $namaPembeli; ?>!</p>
</div>
</body>
</html>