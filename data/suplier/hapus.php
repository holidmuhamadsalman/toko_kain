<?php
$id_suplier = $_GET ['id_suplier'];

include "../config.php";
$result = mysqli_query($conn, "DELETE FROM suplier WHERE id_suplier='$id_suplier'");
header("Location:suplier.php");
?>