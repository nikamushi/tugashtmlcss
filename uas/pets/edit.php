<?php
session_start();
include '../config/update.php';
include_once '../config/func.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../auth/login.php");
    exit;
}

$id = $_GET["id"];

$pet = query("SELECT * FROM pets WHERE id = $id")[0];
$owners = query("SELECT * FROM owners ORDER BY nama ASC");

if (isset($_POST["submit"])) {
    if (updatePets($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil Diubah')
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Diubah')
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1. 0">
    <title>Edit Hewan - Pet Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h5 class="mb-0">Edit Data Hewan Peliharaan</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $pet["id"]; ?>">
                            <input type="hidden" name="fotoLama" value="<?= $pet["foto"]; ?>">

                            <div class="mb-3">
                                <label for="owner_id" class="form-label">Pemilik Hewan</label>
                                <select name="owner_id" id="owner_id" class="form-select" required>
                                    <option value="">-- Pilih Pemilik --</option>
                                    <?php foreach ($owners as $owner) : ?>
                                        <option value="<?= $owner["id"]; ?>" <?= ($owner["id"] == $pet["owner_id"]) ? 'selected' : ''; ?>>
                                            <?= $owner["nama"]; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama_hewan" class="form-label">Nama Hewan</label>
                                <input type="text" name="nama_hewan" id="nama_hewan" class="form-control" value="<?= $pet["nama_hewan"]; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="jenis" class="form-label">Jenis</label>
                                <input type="text" name="jenis" id="jenis" class="form-control" value="<?= $pet["jenis"]; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="usia" class="form-label">Usia (tahun)</label>
                                <input type="number" name="usia" id="usia" class="form-control" value="<?= $pet["usia"]; ?>" min="0" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto Saat Ini</label>
                                <div>
                                    <?php if (!empty($pet["foto"])) : ?>
                                        <img src="../img/<?= $pet["foto"]; ?>" alt="Foto Hewan" width="150" class="rounded border">
                                    <?php else : ?>
                                        <p class="text-muted">Tidak ada foto</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="gambar" class="form-label">Ganti Foto (opsional)</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                                <small class="text-muted">Kosongkan jika tidak ingin mengganti foto. Format: JPG, JPEG, PNG. </small>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit" class="btn btn-warning">Update</button>
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
