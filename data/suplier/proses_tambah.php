<?php
$id_suplier = $_POST['id_suplier'];
$nama_suplier = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

include "../config.php";
$result = mysqli_query($conn, "INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `alamat`, `telepon`) VALUES ('$id_suplier', '$nama_suplier', '$alamat', '$telepon'); ");

header("Location:suplier.php");
?>