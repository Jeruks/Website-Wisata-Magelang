<?php 
$id_wisata = $_GET['id_wisata'];
include '../koneksi.php';
mysqli_query($conn, "DELETE FROM wisata WHERE id_wisata='$id_wisata'");

header('Location: postingan.php');
?>