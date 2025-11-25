<?php
$jumlah = 0;

for ($x = 1; $x <= 23; $x++) {
    for ($y = 1; $y <= 24 - $x; $y++) {
        for ($z = 1; $z <= 25 - ($x + $y); $z++) {
            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z <br>";
                $jumlah++;
            }
        }
    }
}

echo "<br>Jumlah penyelesaian: $jumlah";
