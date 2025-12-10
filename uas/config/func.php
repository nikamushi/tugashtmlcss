<?php
include "conn.php";

function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = $data["password"];
    $password2 = $data["password2"];

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username Tidak Tersedia')</script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>alert('Password Tidak Sama')</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users VALUES(DEFAULT, '$username', '$password')");

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $ext = ['jpg', 'jpeg', 'png'];
    $extg = explode('.', $namaFile);
    $extg = strtolower(end($ext));
    if (!in_array($extg, $ext)) {
        echo "<script>alert('Upload Harus Gambar')</script>";
        return false;
    }

    if ($ukuranFile > 10000000) {
        echo "<script>alert('Ukuran Gambar Terlalu Besar')</script>";
    }

    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $extg;
    move_uploaded_file($tmpName, '../img/' . $namaBaru);

    return $namaBaru;
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
