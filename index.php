<?php include 'header.php' ?>

<div id="myCarousel" class="carousel slide mb-6 bg-black" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/candi-9.png" class="bd-placeholder-img opacity-75" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1 class="text-white" style="
                    font-family: cursive;
                    text-shadow:4px 4px 10px black;
                    ">Tempat bersejarah yang mengagumkan</h1>
                    <p><a class="btn btn-lg btn-outline-warning mt-3" href="hasil-kat.php?id_kategori=10">Cek</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/airterjun.jpg" class="bd-placeholder-img opacity-75" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="" style="
                    font-family: cursive;
                    text-shadow:4px 4px 8px green;
                    ">Alam yang menyejukkan</h1>
                    <p><a class="btn btn-lg btn-outline-success mt-3" href="hasil-kat.php?id_kategori=1">Cek</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/nasi-goreng-magelangan.jpg" class="bd-placeholder-img opacity-75" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1 class="text-white" style="
                    font-family: cursive;
                    text-shadow:4px 4px 10px black;
                    ">Kuliner yang khas</h1>
                    <p><a class="btn btn-lg btn-outline-danger mt-3" href="hasil-kat.php?id_kategori=2">Ayo Makan!</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <h2 class="mb-5 fw-bold text-center" style="font-family: cursive;">Populer</h2>

    <!-- Three columns of text below the carousel -->
    <div class="row text-center">
        <div class="col-md-3 text-center mb-3">
            <img src="img/airterjun.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            <h2 class="fw-normal" style="font-family: cursive;">Kedung Kayang</h2>
            <p>Pemandangan alam yang indah dengan air terjun di bawahnya, membuat pemandangan... </p>
            <p><a class="btn btn-outline-danger" href="detail.php?id_wisata=7">Lihat Selengkapnya &raquo;</a></p>
        </div><!-- /.col-md-3 text-center -->
        <div class="col-md-3 text-center mb-3">
            <img src="img/candi pawon.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            <h2 class="fw-normal" style="font-family: cursive;">Candi Pawon</h2>
            <p>Selain Candi Borobudur, di Magelang juga terdapat candi lain bernama <i>Candi Pawon</i></p>
            <p><a class="btn btn-outline-danger" href="detail.php?id_wisata=10">Lihat Selengkapnya &raquo;</a></p>
        </div><!-- /.col-md-3 text-center -->
        <div class="col-md-3 text-center">
            <img src="img/nepal3.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            <h2 class="fw-normal" style="font-family: cursive;">Nepal Van Java</h2>
            <p>Perumahan di lereng Gunung Sumbing yang tertata rapi dan indah... </p>
            <p><a class="btn btn-outline-danger" href="detail.php?id_wisata=8">Lihat Selengkapnya &raquo;</a></p>
        </div><!-- /.col-md-3 text-center -->
        <div class="col-md-3 text-center">
            <img src="img/silancur.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            <h2 class="fw-normal" style="font-family: cursive;">Silancur Highland</h2>
            <p>Masih berada di lereng Gunung Sumbing, <i>Silancur Highland</i> juga tidak bisa kita lewatkan...</p>
            <p><a class="btn btn-outline-danger" href="detail.php?id_wisata=9">Lihat Selengkapnya &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- /END THE FEATURETTES -->

    <hr class="featurette-divider">

    <h2 class="fw-bold text-center" style="font-family: cursive;">Mendunia</h2>

    <div style="
    background-color: azure;
    border-radius: 15px;
    margin-top: 100px;
    padding: 15px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.8);
    ">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1" style="font-family: cursive;">Candi Borobudur</h2>
                <p class="lead">Salah satu dari 7 keajaiban dunia. Penasaran tentang Candi Borubudur?</p>
                <p><a class="btn btn-outline-danger" href="detail.php?id_wisata=11">Lihat Selengkapnya &raquo;</a></p>
            </div>
            <div class="col-md-5">
                <img src="img/candi-borobudur.jpg" style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
            </div>
        </div>
    </div>

    <div style="
    background-color: azure;
    border-radius: 15px;
    margin-top: 30px;
    padding: 15px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.8);
    ">
        <div class="row featurette">

            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1" style="font-family: cursive;">Kupat Tahu</h2>
                <p class="lead">Tahu dengan sambal kacang dilengkapi rempah-rempah penyedap rasa membuat <i>Kupat Tahu</i> digemari masyarakat Indonesia, bahkan bukan hanya di Indonesia, pasti kamu baru tahu kan?</p>
                <p><a class="btn btn-outline-danger" href="detail.php?id_wisata=12">Lihat Selengkapnya &raquo;</a></p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="img/kupat.jpg" style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
            </div>
        </div>

    </div>


</div><!-- /.container -->


<?php include 'footer.php' ?>