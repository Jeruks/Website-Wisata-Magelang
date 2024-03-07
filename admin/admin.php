<?php include 'header.php' ?>

<div class="container mt-5">


    <h1 class="mb-3 mt-5">Data Admin</h1>
    <br>
    <a href="tambah-admin.php" class="btn btn-outline-success float-end mb-3">Tambah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php

        include '../koneksi.php';

        $no = 1;

        $query = mysqli_query($conn, "SELECT * FROM user");

        while ($d = mysqli_fetch_assoc($query)) {
            

        ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['username'] ?></td>
                    <td><?= $d['password'] ?></td>
                    <td><?= $d['nama'] ?></td>
                    <td>
                        <a class="btn btn-danger" onclick="return Confirm('Yakin ingin menghapus data?')" href="hapus.php?id_user=<?= $d['id_user'] ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>


</div>

<?php include 'footer.php' ?>