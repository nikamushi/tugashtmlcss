<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
</head>

<body>
    <h1>Hitung Gaji Karyawan</h1>


    <?php
    $jamKerja = $_POST['jam'];
    $golongan = $_POST['golongan'];
    $upahLembur = 3000;
    $batasJam = 48;

    if ($golongan == "A") {
        $upahPerJam = 4000;
    } elseif ($golongan = "B") {
        $upahPerJam = 5000;
    } elseif ($golongan == "C") {
        $upahPerJam = 6000;
    } else {
        $upahPerJam = 7500;
    }

    if ($jamKerja > $batasJam) {
        $jamBiasa = $batasJam;
        $jamLembur = $jamKerja - $batasJam;

        $gaji = ($jamBiasa * $upahPerJam) + ($jamLembur * $upahLembur);
    } else {
        $gaji = $jamKerja * $upahPerJam;
    }

    echo "<p>Golongan: $golongan</p>";
    echo "<p>Jumlah jam kerja: $jamKerja jam</p>";
    echo "<p>Gaji yang diterima: Rp. $gaji</p>";
    ?>
</body>

</html>
