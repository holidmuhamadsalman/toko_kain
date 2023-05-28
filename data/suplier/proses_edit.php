<?php
$id_suplier = $_GET ['id_suplier'];
$nama_suplier = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];


include "../config.php";
$result = mysqli_query($conn, "UPDATE suplier SET id_suplier = '$id_suplier', nama_suplier = '$nama_suplier', alamat = '$alamat', telepon = '$telepon' WHERE id_suplier = '$id_suplier';");

header("Location:suplier.php");
?>