<?php
$bilangan1 = $_GET['bil1'];
$bilangan2 = $_GET['bil2'];
$jumlah = $bilangan1 + $bilangan2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Request GET</title>
</head>

<body>
    <h1>Input dua bilangan</h1>
    <?php
    echo "<p>Anda telah memasukkan bilagan pertama = " . $bilangan1 . "</p>";
    echo "<p>Anda telah memasukkan bilagan kedua = " . $bilangan2 . "</p>";
    echo "<p>Hasil penjumlahan adalah " . $jumlah . "</p>";
    ?>
</body>

</html>
