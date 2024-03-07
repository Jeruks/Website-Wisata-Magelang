<?php include 'header.php' ?>

<div class="container mt-5">


    <form class="d-flex mb-5" method="get" action="hasil-cari.php" role="search">
        <input class="form-control me-2" type="text" name="cari" placeholder="Cari Wisata" aria-label="Search">
        <input class="btn btn-outline-success" type="submit" Value="Cari">
    </form>

    <div class="text-center">

        <?php
        include 'koneksi.php';

        $query = mysqli_query($conn, "SELECT * FROM kategori");

        while ($d = mysqli_fetch_assoc($query)) {



        ?>
            <div class="">
                <a href="hasil-kat.php?id_kategori=<?= $d['id_kategori'] ?>" class="col-md-3 me-1 mb-3 text-decoration-none" style="
                width: 47%;
                position: relative;
                height: 100px;
                margin: auto;
                border: 1px solid black;
                border-radius: 15px;
                float: inline-start;
                display: grid;
                row-gap: 20px;
                column-gap: 10px;
                text-shadow: 4px 4px 8px black;
                margin: auto;
                background-image: url('img/<?= $d['foto'] ?>');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                ">
                    <p style="margin:auto; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; text-shadow: 4px 4px 8px gold;" class="text-white fw-bold"><?= $d['nama_kategori'] ?></p>
                </a>
            </div>
        <?php } ?>
    </div>



</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php' ?>