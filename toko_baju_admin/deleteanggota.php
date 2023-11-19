<?php
include_once "../data.php";
$id_barang= $_GET ['id_barang'] ;

mysqli_query ($conn, "DELETE FROM anggota WHERE id_barang = '$id_barang'") or die(mysqli_error($conn));
header("Location:index.php");
?> 