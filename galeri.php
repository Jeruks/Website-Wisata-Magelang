<?php include 'header.php' ?>

<div class="comtainer mt-5">


    <div class="row" style="margin: auto;">

        <?php

        include 'koneksi.php';

        $query = mysqli_query($conn, "SELECT * FROM wisata");

        while ($d = mysqli_fetch_assoc($query)) {


        ?>
            <div class="col-md-2 mb-3">
                <a href="detail.php?id_wisata=<?= $d['id_wisata'] ?>" class="text-text-decoration-none">
                    <div class="card" style="vertical-align: middle;">
                        <div class="card-img">
                            <img src="img/<?= $d['gambar'] ?>" alt="" class="img-fluid mx-auto card-img" width="100%" height="auto">
                        </div>
                        <!-- <div class="card-body text-center">
                            <p class="fw-bold text-decoration-none"><?= $d['nama_wisata'] ?></p>
                        </div> -->
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>



</div>

<?php include 'footer.php' ?>