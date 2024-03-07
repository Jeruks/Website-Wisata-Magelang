<?php include 'header.php' ?>

<div class="container mt-5">

    <h1 class="mt-5 mb-5">Upload Konten</h1>

    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Nama Wisata</label>
            <input type="text" class="form-control" name="nama_wisata" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="" class="form-control" cols="100" rows="6" placeholder="Isi konten"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Wisata</label>
            <input type="file" class="form-control" name="gambar" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Pilih Kategori Wisata</label>
            <select name="id_kategori" class="form-control" id="">
                <?php
                include '../koneksi.php';

                $query = mysqli_query($conn, "SELECT * FROM kategori");
                while ($d = mysqli_fetch_assoc($query)) {
                ?>
                    <option class="form-control" value="<?= $d['id_kategori'] ?>"><?= $d['nama_kategori'] ?></option>
                <?php }
                ?>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-success float-end" name="simpan" value="Tambah">
    </form>

    <?php

    if (isset($_POST['simpan'])) {

        $nama_wisata = $_POST['nama_wisata'];
        $deskripsi = $_POST['deskripsi'];
        $id_kategori = $_POST['id_kategori'];
        $tgl = date("Y-m-d");

        $direktori = "../img/";
        $filename = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], $direktori . $filename);

        include '../koneksi.php';
        mysqli_query($conn, "INSERT INTO wisata SET nama_wisata='$nama_wisata', deskripsi='$deskripsi', gambar='$filename', id_kategori='$id_kategori', tgl='$tgl'");

        echo "<script>alert('Berhasil Upload!');window.location.href='postingan.php'</script>";
    }



    ?>

</div>

<?php include 'footer.php' ?>