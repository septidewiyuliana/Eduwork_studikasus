<?php
include_once "connection.php";
$id_barang= $_GET ['id_barang'] ;

mysqli_query ($conn, "DELETE FROM produk WHERE id_barang = '$id_barang'") or die(mysqli_error($conn));
header("Location:index.php");
?> 