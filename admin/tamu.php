<?php include 'header.php' ?>

<div class="container mt-5">


<h1 class="mb-3 mt-5">Data Tamu</h1>
    <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Isi</th>
                <th>Tanggal Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php

        include '../koneksi.php';

        $no = 1;

        $query = mysqli_query($conn, "SELECT * FROM komen");

        while ($d = mysqli_fetch_assoc($query)) {
            
        ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama_pengirim'] ?></td>
                    <td><?= $d['isi'] ?></td>
                    <td><?= $d['tgl'] ?></td>
                    <td>
                        <a class="btn btn-danger" onclick="return Confirm('Yakin ingin menghapus data?');" href="hapus-tamu.php?id_komen=<?= $d['id_komen'] ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>


</div>

<?php include 'footer.php' ?>