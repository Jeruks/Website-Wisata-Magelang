<?php include 'header.php' ?>

<?php

include '../koneksi.php';

$id_user = $_SESSION['id_user'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");

$d = mysqli_fetch_assoc($query);

?>


<div class="container">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Profil <span style="font-size: smaller;" class="text-body-secondary">(tersimpan)</span></h2>
            <table class="table table-borderless">
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?= $d['nama'] ?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>:</td>
                    <td><?= $d['username'] ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td><?= $d['email'] ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td><?= $d['alamat'] ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-5">
            <form class="form-signin mt-5" method="post">
                <h3 class="h3 mb-3 fw-bold text-center">Edit / Lengkapi Profil</h3>

                <div class="form-floating mb-3">
                    <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Masukkan Nama" value="<?= $d['nama'] ?>" required>
                    <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="floatingPassword" placeholder="Masukkan Username" value="<?= $d['username'] ?>" required>
                    <label for="floatingPassword">Username</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Masukkan Email" value="<?= $d['email'] ?>" required>
                    <label for="floatingPassword">Email</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" name="alamat" class="form-control" id="floatingPassword" placeholder="Masukkan Alamat (opsional)" value="<?= $d['alamat'] ?>">
                    <label for="floatingPassword">Alamat (opsional)</label>
                </div>
<br>
                <input class="btn btn-sm btn-success float-end py-2" name="simpan" type="submit" value="Simpan">
            </form>

            <?php 
            
            if(isset($_POST['simpan'])) {

                $id_user = $_SESSION['id_user'];
                $username = $_POST['username'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
    
                include '../koneksi.php';

                mysqli_query($conn, "UPDATE user SET username='$username', nama='$nama', email='$email', alamat='$alamat' WHERE id_user='$id_user'");

                echo "<script>window.location.href='profil.php'</script>";
            }

            ?>

        </div>
    </div>
</div>

<?php include 'footer.php' ?>