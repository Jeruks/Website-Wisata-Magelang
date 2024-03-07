<?php include 'header.php' ?>

<div class="comtainer mt-5">

    <?php

    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
    ?>
        <h4 class="text-center mb-3">Hasil pencarian : <b class="text-decoration-underline"><?= $cari ?></b></h4>
    <?php  }


    ?>

    <div class="row" style="margin: auto;">

        <?php

        include 'koneksi.php';
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($conn, "SELECT * FROM wisata WHERE nama_wisata LIKE '%" . $cari . "%'");
        } else {
            $data = mysqli_query($conn, "SELECT * FROM wisata");
        }

        while ($d = mysqli_fetch_assoc($data)) {

        ?>

            <div class="col-md-2 mb-3">
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