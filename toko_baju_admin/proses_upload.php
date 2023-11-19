<?php
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];
$id_kategori = $_POST['id_kategori']; // Menambahkan id_kategori dari form

include_once "connection.php";

mysqli_query($conn, "INSERT INTO `produk` (`nama_produk`, `harga`, `stok`, `keterangan`, `gambar`, `id_kategori`) 
VALUES ('$nama_produk', '$harga', '$stok', '$keterangan', '$gambar', '$id_kategori')");

header("Location: index.php");
?>
