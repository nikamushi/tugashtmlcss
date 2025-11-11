<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Request POST</title>
</head>

<body>
    <h1>Input dua bilangan</h1>
    <?php
    echo "<p>Anda telah memasukkan bilagan pertama = " . $bilangan1 . "</p>";
    echo "<p>Anda telah memasukkan bilagan kedua = " . $bilangan2 . "</p>";
    ?>
</body>

</html>
