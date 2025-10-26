<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi jumlah detik ke satuan jam-menit-detik</title>
</head>

<body>
    <h1>Konversi jumlah detik ke satuan jam-menit-detik</h1>
    <?php

    /*
    Script ini merupakan kebalikan dari script5-3.php
    Script ini akan mengkonversi waktu yang diketahui dalam satuan detik
    ke dalam satuan jam-menit-detik;
    Diketahui waktu dalam detik dalah 15789 detik, akan dikonversi ke
    bentuk x jam, y menit dan z detik
    */
    $totalDetik = 15789; // Jumlah total detik mula-mula
    // Mencari waktu dalam jam
    $sisa = $totalDetik % 3600;
    $dalamJam = ($totalDetik - $sisa);
    // Sisa dari perhitungan jam digunakan untuk menghitung menitnya
    $totalDetik = $sisa;
    $sisa = $totalDetik % 60;
    $dalamMenit = ($totalDetik - $sisa) / 60;
    // Sisa dalam perhitungan menit digunakan untuk menghitung detiknya
    $totalDetik = $sisa;
    $sisa = $totalDetik % 1;
    $dalamDetik = ($totalDetik - $sisa) / 1;
    echo "<p>Hasil konversinya adalah : " . $dalamJam . " jam: " . $dalamMenit . " menit : " . $dalamDetik . " detik</p>"

    ?>
</body>

</html>