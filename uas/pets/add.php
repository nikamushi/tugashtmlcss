<?php
session_start();
include '../config/create.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../auth/login.php");
    exit;
}

$owners = query("SELECT * FROM owners ORDER BY nama ASC");

if (isset($_POST["submit"])) {
    if (createPets($_POST) > 0) {
        echo "<script>
        alert('Data Hewan Berhasil Ditambahkan')
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan')
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1. 0">
    <title>Tambah Hewan - Pet Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Tambah Data Hewan Peliharaan</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="owner_id" class="form-label">Pemilik Hewan</label>
                                <select name="owner_id" id="owner_id" class="form-select" required>
                                    <option value="">-- Pilih Pemilik --</option>
                                    <?php foreach ($owners as $owner) : ?>
                                        <option value="<?= $owner["id"]; ?>">
                                            <?= $owner["nama"]; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama_hewan" class="form-label">Nama Hewan</label>
                                <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" placeholder="Masukkan nama hewan" required>
                            </div>

                            <div class="mb-3">
                                <label for="jenis" class="form-label">Jenis</label>
                                <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Contoh: Kucing, Anjing, Burung" required>
                            </div>

                            <div class="mb-3">
                                <label for="usia" class="form-label">Usia (tahun)</label>
                                <input type="number" name="usia" id="usia" class="form-control" placeholder="Masukkan usia hewan" min="0" required>
                            </div>

                            <div class="mb-3">
                                <label for="gambar" class="form-label">Foto Hewan</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
                                <small class="text-muted">Format: JPG, JPEG, PNG. Maksimal: 10MB</small>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                <a href="index.php" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
