<?php include 'header.php' ?>

<div class="container">
    <div class="custom" style="
    background-color: azure;
    border-radius: 15px;
    margin-top: 100px;
    padding: 30px;
    ">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Tentang Kami <span class="text-body-secondary">(Profile)</span></h2>
                <p class="lead">Website Wisata Magelang merupakan aplikasi berbasis website berikan konten-konten seputar tempat-tempat wisata yang ada di Kabupaten Magelang. <br>
                    Website ini juga bertujuan untuk mengenalkan keindahan-keindahan yang ada di Kabupaten Magelang ke khalayak umum.</p>
            </div>
            <div class="col-md-5">
                <img src="img/smkw9.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mt-5" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
            </div>
        </div>
    </div>


    <hr class="mb-5">

    <h2 class="text-secondary mb-3 mt-5"><i>Kata Mereka</i></h2>

    <div class="row" style="margin: auto;">

        <?php

        include 'koneksi.php';

        $query = mysqli_query($conn, "SELECT * FROM komen");

        while ($d = mysqli_fetch_assoc($query)) {



        ?>

            <div class="col-md-3 mb-3">
                <div class="card bg-warning-subtle">
                    <div class="card-header">
                        <b><?= $d['nama_pengirim'] ?></b>
                    </div>
                    <div class="card-body">
                        <p>"<?= $d['isi'] ?>"</p>
                        <small class="float-end" style="font-size: smaller;"><i><?= $d['tgl'] ?></i></small>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <hr>

    <p class="fw-bolder ">Ingin meninggalkan pesan seperti tamu-tamu kami di atas? Tentu saja kamu bisa!
        <br>
        Dengan mengisi kolom di bawah ini, kalian banyak membantu kami untuk membuat website <i class="text-danger fw-bold">Wonderful Magelang</i> menjadi lebih baik😁
    </p>
    <div class="card bg-danger-subtle" style="
    padding: 30px;
    width: 70%;
    margin: auto;">
        <form class="" method="post">
            <h3 class="h3 mb-3 fw-bold text-center">Tinggalkan Pesan</h3>

            <div class="form-floating mb-3">
                <input type="text" name="nama_pengirim" class="form-control" id="floatingInput" placeholder="Masukkan Nama" required>
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating">
                <input type="text" name="isi" class="form-control" id="floatingPassword" placeholder="" required>
                <label for="floatingPassword">Isi Pesan</label>
            </div>
            <br>
            <input class="btn btn-sm btn-success float-end py-2" name="simpan" type="submit" value="Simpan">
        </form>

        <?php

        if (isset($_POST['simpan'])) {

            $nama_pengirim = $_POST['nama_pengirim'];
            $isi = $_POST['isi'];
            $tgl = date("Y-m-d");

            include 'koneksi.php';

            mysqli_query($conn, "INSERT INTO komen VALUES (NULL, '$nama_pengirim', '$isi', '$tgl')");

            echo "<script>window.location.href='tentang.php'</script>";
        }

        ?>

    </div>

</div>


<?php include 'footer.php' ?>