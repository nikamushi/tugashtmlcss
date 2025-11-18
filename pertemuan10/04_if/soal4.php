<?php
$bulan = date("n");
$tahun = date("y");

switch ($bulan) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $jumlahHari = 31;
        break;

    case 4:
    case 6:
    case 9:
    case 11:
        $jumlahHari = 30;
        break;

    case 2:
        if (($tahun % 400 == 0) || ($tahun % 4 == 0 && $tahun % 100 != 0)) {
            $jumlahHari = 29;
        } else {
            $jumlahHari = 28;
        }
        break;
}

$namaBulan = date("F");
echo "Bulan saat ini: $namaBulan $tahun <br>";
echo "Jumlah hari dalam bulan ini: $jumlahHari";
