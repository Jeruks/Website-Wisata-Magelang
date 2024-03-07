<?php include 'header.php' ?>

<div class="comtainer mt-5">


    <div class="row" style="margin: auto;">

        <?php

        include 'koneksi.php';

        $id_kategori = $_GET['id_kategori'];

        $query = mysqli_query($conn, "SELECT * FROM wisata WHERE id_kategori='$id_kategori'");

        while ($d = mysqli_fetch_assoc($query)) {


        ?>
            <div class="col-md-3 mb-3">
            <a href="detail.php?id_wisata=<?= $d['id_wisata'] ?>" class="text-decoration-none">
                <div class="card">
                        <div class="card-img">
                            <img src="img/<?= $d['gambar'] ?>" alt="" class="img-fluid mx-auto card-img" width="500" height="500">
                        </div>
                    <div class="card-body text-center">
                        <p class="fw-bold"><?= $d['nama_wisata'] ?></p>
                    </div>
                </div>
            </a>
            </div>
        <?php } ?>
    </div>



</div>

<?php include 'footer.php' ?>