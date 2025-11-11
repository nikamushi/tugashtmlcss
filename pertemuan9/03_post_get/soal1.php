<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>

<body>
    <?php
    $saldoAwal = $_POST['saldo'];
    $bunga = $_POST['bunga'];
    $bulan = $_POST['bulan'];
    $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga + $bulan);
    echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoAkhir . ",-";
    ?>
</body>

</html>
