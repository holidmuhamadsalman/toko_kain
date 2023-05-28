<?php
$id_produk = $_GET ['id_produk'];
$kategori_id = $_POST['kategori_id'];
$suplier_id = $_POST['suplier_id'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$warna = $_POST['warna'];
$gambar = $_POST['gambar'];


include "../config.php";
$result = mysqli_query($conn, "UPDATE produk SET id_produk = '$id_produk', kategori_id = '$kategori_id', suplier_id = '$suplier_id', nama = '$nama', stok = '$stok', gambar = '$gambar' WHERE id_produk = '$id_produk';");

header("Location:produk.php");
?>