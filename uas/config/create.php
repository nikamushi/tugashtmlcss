<?php
include 'conn.php';
include 'func.php';

function createOwner($data)
{
    global $conn;
    $nama = $data["nama"];
    $no_hp = $data["no_hp"];
    $alamat = $data["alamat"];

    $query = "INSERT INTO owners VALUES (DEFAULT, '$nama', '$no_hp', '$alamat')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function createPets($data)
{
    global $conn;
    $owner_id = $data["owner_id"];
    $nama_hewan = $data["nama_hewan"];
    $jenis = $data["jenis"];
    $usia = $data["usia"];

    $foto = upload();
    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO pets VALUES (DEFAULT, '$owner_id', '$nama_hewan', '$jenis', '$usia', '$foto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
