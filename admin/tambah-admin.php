<?php include 'header.php' ?>

<div class="container mt-5">

    <h1 class="mt-5 mb-5">Tambah Admin</h1>

    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <br>
        <input type="submit" class="btn btn-success float-end" name="register" value="Tambah">
    </form>

    <?php

    if (isset($_POST['register'])) {

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $nama = $_POST['nama'];

        include '../koneksi.php';
        mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$password', '$nama', '', '')");

        echo "<script>alert('Berhasil Menambahkan Admin!');window.location.href='admin.php'</script>";
    }



    ?>

</div>

<?php include 'footer.php' ?>