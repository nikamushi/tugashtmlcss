<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
</head>

<body>
    <h1>Hitung gaji Karyawan</h1>

    <?php
    $jamKerja = $_POST['jam'];
    $upahPerJam = 2000;
    $upahLembur = 300;
    $batasJam = 48;

    if ($jamKerja > $batasJam) {
        $jamBiasa = $batasJam;
        $jamLembur = $jamKerja - $batasJam;

        $gaji = ($jamBiasa * $upahPerJam) + ($jamLembur * $upahLembur);
    } else {
        $gaji = $jamKerja * $upahPerJam;
    }

    echo "<p>Jumlah jam kerja: $jamKerja jam</p>";
    echo "<p>Gaji yang diterima: Rp. $gaji</p>";
    ?>
</body>

</html>
