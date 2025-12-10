<?php
include 'conn.php';
include 'func.php';

function updateOwner($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $no_hp = $data["no_hp"];
    $alamat = $data["alamat"];

    $query = "UPDATE owners SET
    nama = '$nama',
    no_hp = '$no_hp',
    alamat = '$alamat'
    WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updatePets($data)
{
    global $conn;

    $id = $data["id"];
    $owner_id = $data["owner_id"];
    $nama_hewan = $data["nama_hewan"];
    $jenis = $data["jenis"];
    $usia = $data["usia"];
    $fotoLama = $data['fotoLama'];

    if ($_FILES['gambar']['error'] === 4) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }

    $query = "UPDATE pets SET
    owner_id = '$owner_id',
    nama_hewan = '$nama_hewan',
    jenis = '$jenis',
    usia = '$usia',
    foto = '$foto'
    WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
