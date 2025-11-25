<?php
$saldo = $_POST['saldo_awal'];
$bulan = $_POST['bulan'];

for ($i = 1; $i <= $bulan; $i++) {
    if ($saldo < 1100000) {
        $bunga = 0.03;
    } else {
        $bunga = 0.04;
    }

    $bunga_bulanan = $bunga / 12;
    $saldo = $saldo + ($saldo * $bunga_bulanan);
    $saldo = $saldo - 9000;
}

echo "<h3>Hasil:</h3>";
echo "Saldo akhir setelah <b>$bulan</b> bulan adalah: <b>Rp. " . number_format($saldo, 2, ',', '.') . "</b>";
