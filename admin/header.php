<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
}

?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
<link rel="shortcut icon" href="img/profil.jpg">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="generator" content="Hugo 0.122.0">
<title>Wisata Magelang Admin</title>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/carousel.css">
<link rel="stylesheet" href="assets/css/sign-in.css">

</head>

<body>

    <header data-bs-theme="light">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-family: cursive;">Admin Wonderful Magelang</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" style="font-family: Arial, Helvetica, sans-serif;" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: Arial, Helvetica, sans-serif;" href="admin.php">Daftar Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: Arial, Helvetica, sans-serif;" href="kategori.php">Data Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: Arial, Helvetica, sans-serif;" href="postingan.php">Data Postingan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: Arial, Helvetica, sans-serif;" href="tamu.php">Guest Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: Arial, Helvetica, sans-serif;" href="profil.php?id_user=<?= $_SESSION['id_user'] ?>">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: Arial, Helvetica, sans-serif;" onclick="return Confirm('Yakin ingin keluar?');" href="logout.php">Log Out</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>