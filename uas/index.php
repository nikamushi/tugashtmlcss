<?php
session_start();
include 'config/conn.php';

if (!isset($_SESSION["login"])) {
    header("Location: auth/login.php");
    exit;
}

$totalOwners = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM owners"))['total'] ?? 0;
$totalPets = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM pets"))['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1. 0">
    <title>Dashboard - Sistem Pendataan Hewan Peliharaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="bi bi-heart-pulse-fill me-2"></i>Pet Management
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            <i class="bi bi-speedometer2 me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="owners/index.php">
                            <i class="bi bi-people me-1"></i>Pemilik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pets/index.php">
                            <i class="bi bi-piggy-bank me-1"></i>Hewan
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>
                            <?= isset($_SESSION["username"]) ? $_SESSION["username"] : 'Admin'; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item text-danger" href="auth/logout.php">
                                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-3">
                        <i class="bi bi-house-heart me-2"></i>Selamat Datang, <?= isset($_SESSION["username"]) ? $_SESSION["username"] : 'Admin'; ?>!
                    </h1>
                    <p class="lead mb-0 opacity-75">
                        Kelola data pemilik dan hewan peliharaan dengan mudah melalui sistem ini.
                    </p>
                </div>
                <div class="col-lg-4 text-end d-none d-lg-block">
                    <i class="bi bi-clipboard-data" style="font-size: 100px; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1">Total Pemilik</p>
                                <h2 class="fw-bold mb-0"><?= $totalOwners; ?></h2>
                                <small class="text-success">
                                    <i class="bi bi-people-fill me-1"></i>Pemilik Terdaftar
                                </small>
                            </div>
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                                <i class="bi bi-people-fill text-primary" style="font-size: 35px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="text-muted mb-1">Total Hewan</p>
                                <h2 class="fw-bold mb-0"><?= $totalPets; ?></h2>
                                <small class="text-success">
                                    <i class="bi bi-piggy-bank-fill me-1"></i>Hewan Terdaftar
                                </small>
                            </div>
                            <div class="bg-success bg-opacity-10 rounded-circle p-3">
                                <i class="bi bi-piggy-bank-fill text-success" style="font-size: 35px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="fw-bold mb-4">
            <i class="bi bi-lightning-charge-fill text-warning me-2"></i>Aksi Cepat
        </h5>
        <div class="row g-4 mb-5">
            <div class="col-md-3 col-6">
                <a href="owners/add.php" class="text-decoration-none">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body py-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                                <i class="bi bi-person-plus-fill text-primary" style="font-size: 25px;"></i>
                            </div>
                            <h6 class="mb-0">Tambah Pemilik</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="pets/add.php" class="text-decoration-none">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body py-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                                <i class="bi bi-plus-circle-fill text-success" style="font-size: 25px;"></i>
                            </div>
                            <h6 class="mb-0">Tambah Hewan</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="owners/index.php" class="text-decoration-none">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body py-4">
                            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                                <i class="bi bi-list-ul text-info" style="font-size: 25px;"></i>
                            </div>
                            <h6 class="mb-0">Daftar Pemilik</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="pets/index.php" class="text-decoration-none">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body py-4">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                                <i class="bi bi-card-list text-warning" style="font-size: 25px;"></i>
                            </div>
                            <h6 class="mb-0">Daftar Hewan</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">
                        <i class="bi bi-heart-pulse-fill me-2"></i>
                        <strong>Pet Management</strong> - Sistem Pendataan Hewan Peliharaan
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="text-muted">&copy; 2025 All Rights Reserved</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
