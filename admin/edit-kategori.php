<?php include 'header.php' ?>

<?php 

include '../koneksi.php';

$id_kategori = $_GET['id_kategori'];

$query = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");

$d = mysqli_fetch_assoc($query);

?>



<div class="container mt-5">

    <h1 class="mt-5 mb-5">Edit Kategori</h1>

    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" value="<?= $d['nama_kategori'] ?>"  required>
        </div>
        <br>
        <input type="submit" class="btn btn-success float-end" name="simpan" value="Ubah">
    </form>

    <?php

    if (isset($_POST['simpan'])) {

        $id_kategori = $_GET['id_kategori'];
        $nama_kategori = $_POST['nama_kategori'];

        include '../koneksi.php';
        mysqli_query($conn, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

        echo "<script>alert('Berhasil Mengubah Kategori!');window.location.href='kategori.php'</script>";
    }



    ?>

</div>

<?php include 'footer.php' ?>