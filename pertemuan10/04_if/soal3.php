<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Karyawan</title>
</head>

<body>
    <h1>Hitung gaji Karyawan</h1>

    <form action="soal3proses.php" method="post">
        Jumlah jam kerja per minggu:
        <input type="number" name="jam"> <br>

        Golongan:
        <select name="golongan">
            <option value="">--Pilih Golongan--</option>
            <option value="A">A (Rp 4.000/jam)</option>
            <option value="B">B (Rp 5.000/jam)</option>
            <option value="C">C (Rp 6.000/jam)</option>
            <option value="D">D (Rp 7.500/jam)</option>
        </select> <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
