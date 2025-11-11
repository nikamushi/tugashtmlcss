<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>

<body>
    <?php
    $namaLengkap = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggal = $_POST['tgl'];
    $bulan = $_POST['bln'];
    $tahun = $_POST['thn'];
    $tanggalLahir = $tanggal . "-" . $bulan . "-" . $tahun;
    $alamatRumah = $_POST['alamat'];
    $jenisKelamin = $_POST['kelamin'];
    $asalSekolah = $_POST['sekolah'];
    $nilaiUAN = $_POST['nilai'];

    echo "<p>Terimakasih <strong>$namaLengkap</strong> sudah mengisi form pendaftaran</p>";
    echo "<table>
                <tr><td>Nama Lengkap</td><td>:</td><td>$namaLengkap</td></tr>
                <tr><td>Tempat, Tanggal Lahir</td><td>:</td><td>$tempatLahir, $tanggalLahir</td></tr>
                <tr><td>Alamat</td><td>:</td><td>$alamatRumah</td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td>$jenisKelamin</td></tr>
                <tr><td>Asal Sekolah</td><td>:</td><td>$asalSekolah</td></tr>
                <tr><td>Nilai UAN</td><td>:</td><td>$nilaiUAN</td></tr>
              </table>";
    ?>
</body>

</html>
