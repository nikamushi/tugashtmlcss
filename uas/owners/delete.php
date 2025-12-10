<?php
session_start();
include '../config/destroy.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../auth/login.php");
    exit;
}

$id = $_GET["id"];

if (destroyOwner($id) > 0) {
    echo "<script>
    alert('Data Berhasil Dihapus')
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus')
    document.location.href = 'index.php';
    </script>";
}
