<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu Tempuh Ke Detik</title>
</head>

<body>
    <h1>Konversi Waktu Tempuh Ke Detik</h1>
    <?php

    /*
    Script ini akan mengkonversi waktu yang dinyatakan dalam 10:16:42 (10 jam, 16 menit dan 42 detik) ke dalam satuan detik.
    */

    $jam = 10;
    $menit = 16;
    $detik = 42;
    $jamKeDetik = $jam * 3600; // Konversi jam ke detik
    $menitKeDetik = $menit * 60; // Konversi menit ke detik
    $detikKeDetik = $detik; // Konversi ke detik
    $totalDetik = $jamKeDetik + $menitKeDetik + $detikKeDetik; // Hitung total waktu dalam detik
    echo "<p>Jika waktu " . $jam . ":" . $menit . ":" . $detik . " dinyatakan dalam satuan detik adalah : " . $totalDetik . "</p>"

    ?>
</body>

</html>