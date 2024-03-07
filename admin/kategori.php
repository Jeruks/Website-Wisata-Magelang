<?php include 'header.php' ?>

<div class="container mt-5">


<h1 class="mb-3 mt-5">Data Kategori</h1>
    <br>
    <a href="tambah-kategori.php" class="btn btn-outline-success float-end mb-3">Tambah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php

        include '../koneksi.php';

        $no = 1;

        $query = mysqli_query($conn, "SELECT * FROM kategori");

        while ($d = mysqli_fetch_assoc($query)) {
            
        ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama_kategori'] ?></td>
                    <td>
                        <a href="edit-kategori.php?id_kategori=<?= $d['id_kategori'] ?>" class="btn btn-info text-white">Edit</a>
                        <a class="btn btn-danger" onclick="return Confirm('Yakin ingin menghapus data?')" href="hapus-kat.php?id_kategori=<?= $d['id_kategori'] ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>


</div>

<?php include 'footer.php' ?>