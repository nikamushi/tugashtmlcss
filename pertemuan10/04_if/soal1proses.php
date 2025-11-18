<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Tahun Kabisat</title>
</head>

<body>
    <h1>Cek Tahun Kabisat</h1>
    <?php
    $tahun = $_POST['tahun'];

    if (($tahun % 400 == 0) || ($tahun % 4 == 0 && $tahun % 100 != 0)) {
        echo "<p>Tahun $tahun adalah tahun kabisat.</p>";
    } else {
        echo "<p>Tahun $tahun bukan tahun kabisat.</p>";
    }
    ?>
</body>

</html>
