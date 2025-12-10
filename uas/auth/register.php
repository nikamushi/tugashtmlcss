<?php
include '../config/func.php';

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
        alert('User Berhasil Ditambahkan');
        document.location.href= 'login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1. 0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-form {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0. 1);
        }
    </style>
</head>

<body>
    <div class="register-form">
        <h3 class="text-center mb-4">Registrasi</h3>

        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>

            <div class="mb-3">
                <label for="password2" class="form-label">Konfirmasi Password</label>
                <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi password" required>
            </div>

            <button type="submit" name="register" class="btn btn-primary w-100 mb-3">Daftar</button>

            <div class="text-center">
                <span>Sudah punya akun? </span>
                <a href="login.php" class="text-decoration-none">Masuk</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
