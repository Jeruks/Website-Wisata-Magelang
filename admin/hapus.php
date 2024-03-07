<?php
$id_user = $_GET['id_user'];
include '../koneksi.php';
mysqli_query($conn, "DELETE FROM user WHERE id_user='$id_user'");

header('Location: admin.php');
?>



