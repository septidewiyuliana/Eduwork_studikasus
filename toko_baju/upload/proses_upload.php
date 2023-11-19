<?php 
// Koneksi ke database
include("../connection.php");

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];


mysqli_query($conn, "INSERT INTO `produk` (`nama_produk`, `harga`, `gambar`) 
VALUES ('$nama_produk', '$harga', '$gambar')");

header("Location: ../shop.php");
?>
