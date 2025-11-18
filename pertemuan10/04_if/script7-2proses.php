<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Status Bilangan</title>
</head>

<body>
    <h1>Mencari Status Bilangan</h1>

    <?php
    $bilangan = $_POST['bil'];

    // cara ke - 1

    if ($bilangan > 0)
        echo "<p>Bilangan " . $bilangan . " adalah positif</p>";
    else
        if ($bilangan < 0)
        echo "<p>Bilangan " . $bilangan . " adalah negatif</p>";
    else
        echo "<p>Bilangan " . $bilangan . " adalah nol</p>";

    // cara ke - 2
    if ($bilangan > 0)
        $status = "positif";
    else
        if ($bilangan < 0)
        $status = "negatif";
    else
        $status = "nol";

    echo "<p>Bilangan " . $bilangan . " adalah " . $status . "</p>";
    ?>
</body>

</html>
