<?php
$id_produk = $_POST['id_produk'];
$kategori_id = $_POST['kategori_id'];
$suplier_id = $_POST['suplier_id'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$warna = $_POST['warna'];
$gambar = $_POST['gambar'];


include "../config.php";
$result = mysqli_query($conn, "INSERT INTO `produk` (`id_produk`, `kategori_id`, `suplier_id`, `nama`, `stok`, `harga`, `warna`, `gambar`) VALUES ('$id_produk', '$kategori_id', '$suplier_id', '$nama', '$stok', '$harga', '$warna', '$gambar'); ");

header("Location:produk.php");
?>