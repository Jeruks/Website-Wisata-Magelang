<?php include 'header.php' ?>

<div class="container mt-5">

    <h1 class="mt-5 mb-5">Tambah Kategori</h1>

    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" required>
        </div>
        <br>
        <input type="submit" class="btn btn-success float-end" name="simpan" value="Tambah">
    </form>

    <?php

    if (isset($_POST['simpan'])) {

        $nama_kategori = $_POST['nama_kategori'];

        include '../koneksi.php';
        mysqli_query($conn, "INSERT INTO kategori VALUES (NULL, '$nama_kategori')");

        echo "<script>alert('Berhasil Menambahkan Kategori!');window.location.href='kategori.php'</script>";
    }



    ?>

</div>

<?php include 'footer.php' ?>