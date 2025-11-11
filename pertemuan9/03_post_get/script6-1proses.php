<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca input dari form</title>
</head>

<body>
    <h1>Baca input dari form</h1>

    <p>Berikut ini data yang telah Anda masukkan dalam form</p>

    <?php
    $namaAnda = $_POST['nama']; // membaca input dari komponenen nama
    $alamatAnda = $_POST['alamat']; // membaca input dari komponenen alamat
    $sexAnda = $_POST['sex']; // membaca input dari komponenen sex
    $jobAnda = $_POST['job']; // membaca input dari komponenen job
    $statusMenikah = $_POST['status']; // membaca input dari komponenen status

    echo "<table>";
    echo "<tr><td>Nama Anda</td><td>:</td><td>" . $namaAnda . "</td></tr>";
    echo "<tr><td>Alamat Anda</td><td>:</td><td>" . $alamatAnda . "</td></tr>";
    echo "<tr><td>Jenis Kelamin Anda</td><td>:</td><td>" . $sexAnda . "</td></tr>";
    echo "<tr><td>Pekerjaan Anda</td><td>:</td><td>" . $jobAnda . "</td></tr>";
    echo "<tr><td>Status Menikah</td><td>:</td><td>" . $statusMenikah . "</td></tr>";
    echo "</table>";
    ?>
</body>

</html>
