<?php
$id_kategori = $_GET ['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

include "../config.php";
$result = mysqli_query($conn, "UPDATE kategori SET id_kategori = '$id_kategori', nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori';");

header("Location:kategori.php");
?>