<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghting Gaji Bersih Karyawan</title>
</head>

<body>
    <h1>Menghitung Gaji Bersih Karyawan</h1>
    <?php

    /*
    Script ini akan menghtitung gaji bersih karyawan yang dirumuskan dengan
    Gaji Bersih = gaji Pokok + tunjangan - pajak;
    Misalkan gaji pokoknya Rp. 1.000.000, tunjangan Rp. 500.000 dan
    pajaknya 15% dri (gaji kotor = gaji pokok + tunjangan)
    Berikut ini ada beberapa cara pembuatan script yang akan menghasilkan
    output yang sama
    */
    // CARA KE - 1
    $gajiPokok = 1000000; // Gaji pokok
    $tunjangan = 500000; // Tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // Hitung gaji kotor
    $pajak = 0.15 * $gajiKotor; // Hitung gaji bersih
    $gajiBersih = $gajiPokok + $tunjangan - $pajak; // Hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . "</p>"; // Menampilkan gaji bersih
    // CARA KE - 2
    $gajiPokok = 1000000; // Gaji pokok
    $tunjangan = 500000; // Tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // Hitung gaji kotor
    $gajiBersih = $gajiKotor - (0.15 * $gajiKotor); // Hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . "</p>"; // Menampilkan gaji bersih
    // CARA KE - 3
    $gajiPokok = 1000000; // Gaji pokok
    $tunjangan = 500000; // Tunjangan
    $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok + $tunjangan); // Hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . "</p>"; // Menampilkan gaji bersih
    ?>
</body>

</html>