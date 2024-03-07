<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Sign Up · Admin</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">


    <main class="form-signin w-100 m-auto">
        <form method="post">
            <h1 class="h3 mb-3 fw-bold text-center">Sign Up</h1>

            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Masukkan Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Masukkan Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-5">
                <input type="text" name="nama" class="form-control" id="floatingPassword" placeholder="Masukkan Password">
                <label for="floatingPassword">Nama</label>
            </div>

            <input class="btn btn-success w-100 py-2" name="register" type="submit" value="Sign Up">
        </form>
        <p>Sudah punya akun?<a href="login.php">Log In</a></p>
    </main>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];

    include '../koneksi.php';
    mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$password', '$nama')");

    echo "<script>alert('Berhasil Sign Up!');window.location.href='login.php'</script>";
}



?>