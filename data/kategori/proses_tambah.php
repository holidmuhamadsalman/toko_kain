<?php
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

include "../config.php";
$result = mysqli_query($conn, "INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES ('$id_kategori', '$nama_kategori'); ");

header("Location:kategori.php");
?>