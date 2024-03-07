<?php include 'header.php' ?>

<div class="container mt-5">


    <h1 class="mb-3 mt-5">Data Posting</h1>
    <br>
    <a href="upload.php" class="btn btn-outline-success float-end mb-3">Upload</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Deskripsi</th>
                <th>Konten</th>
                <th>Kategori</th>
                <th>Tanggal diubah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php

        include '../koneksi.php';

        $no = 1;

        $query = mysqli_query($conn, "SELECT * FROM wisata INNER JOIN kategori ON wisata.id_kategori = kategori.id_kategori");

        while ($d = mysqli_fetch_assoc($query)) {

        ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama_wisata'] ?></td>
                    <td><?= $d['deskripsi'] ?></td>
                    <td><img src="../img/<?= $d['gambar'] ?>" alt="" width="200" height="200"></td>
                    <td><?= $d['nama_kategori'] ?></td>
                    <td><?= $d['tgl'] ?></td>
                    <td>
                        <a href="edit-postingan.php?id_wisata=<?= $d['id_wisata'] ?>" class="btn btn-info text-white">Edit</a>
                        <a class="btn btn-danger" onclick="return Confirm('Yakin ingin menghapus data?')" href="hapus-post.php?id_wisata=<?= $d['id_wisata'] ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>


</div>

<?php include 'footer.php' ?>