<?php
$id_komen = $_GET['id_komen'];
include '../koneksi.php';
mysqli_query($conn, "DELETE FROM komen WHERE id_komen='$id_komen'");

header('Location: tamu.php');
?>



