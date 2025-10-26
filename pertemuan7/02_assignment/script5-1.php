<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Komisi Salesman</title>
</head>

<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php

    /*
    Script ini akan menghitung komisi salesman berdasarkan nilai penjualan
    yang dicapainya yang sebesar Rp. 1.500.000,-
    Ketentuan komisinya adalah 5% dari nilai penualan yang dicapai.
    */
    $nilaiJual = 1500000; // Nilai penjualan yang didapat salesmen
    $komisi = 0.05; // Menghitung komisi yaitu 5% dari nilai penjualan
    echo "<p>Nilai penjualan salesman  : Rp. " . $nilaiJual . "</p>"; // Menampilkan nilai penjualan salesman
    echo "<p>Komisi yang didapat salesman adalah Rp. " . $komisi . "</p>";
    // Menampilkan hasil perhitungan komisi
    ?>
</body>

</html>