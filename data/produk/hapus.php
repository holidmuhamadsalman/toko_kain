<?php
$id_produk = $_GET ['id_produk'];

include "../config.php";
$result = mysqli_query($conn, "DELETE FROM produk WHERE id_produk='$id_produk'");
header("Location:produk.php");
?>