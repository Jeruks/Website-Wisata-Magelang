<?php include 'header.php' ?>

<?php

include 'koneksi.php';

$id_wisata = $_GET['id_wisata'];

$query = mysqli_query($conn, "SELECT * FROM wisata WHERE id_wisata='$id_wisata'");

$d = mysqli_fetch_assoc($query);

?>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active text-center bg-light">
      <img src="img/<?= $d['gambar'] ?>" class="bd-placeholder-img" width="600" height="515" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
      <div class="container">
        <div class="carousel-caption text-start">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">


  <h2 class="mb-5 fw-bold text-center" style="font-family: cursive;"><?= $d['nama_wisata'] ?></h2>

  <div style="
    background-color: azure;
    border-radius: 15px;
    padding: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.3);
    ">
    <div class="row featurette">
      <div class="col-md-7">
        <p class="lead"><?= $d['deskripsi'] ?></p>
      </div>
      <div class="col-md-5">
        <a href="img/<?= $d['gambar'] ?>" download>
          <img src="img/<?= $d['gambar'] ?>" style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        </a>
        <text class="float-end text-secondary"><i><?= $d['tgl'] ?></i></text>
        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
      </div>
    </div>
  </div>
  <div style="
    background-color: azure;
    border-radius: 15px;
    margin-top: 10px;
    padding: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.3);
    ">
    <div class="col-md-9">
      <div class="position-sticky" style="top: 2rem;">

        <div>
          <h4 class="fst-italic">Baca juga</h4>
          <div class="row">

            <?php

            include 'koneksi.php';

            $tampil = mysqli_query($conn, "SELECT * FROM `wisata` ORDER BY RAND() LIMIT 3");

            while ($data = mysqli_fetch_assoc($tampil)) {



            ?>

              <div class="col-md-4" style="margin-right: auto;">
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="detail.php?id_wisata=<?= $data['id_wisata'] ?>">
                  <img src="img/<?= $data['gambar'] ?>" class="bd-placeholder-img" width="90%" height="120" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="#777" />
                  <div class="col-lg-6">
                    <h6 class="mb-0"><b><?= $data['nama_wisata'] ?></b></h6>
                    <small class="text-body-secondary"><?= $data['tgl'] ?></small>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>

      </div>
    </div>
  </div>


</div>
<?php include 'footer.php' ?>