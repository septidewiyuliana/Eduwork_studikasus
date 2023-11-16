<?php
include_once("../connection.php");
    $produk_id = $_GET['id_barang']; // Ambil ID produk dari parameter URL atau dari formulir, sesuai dengan kebutuhan Anda
    $sql = "SELECT * FROM produk WHERE id_barang = $produk_id"; // Ganti 'produk' dengan nama tabel dan 'id' dengan kolom ID produk
    $result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result); // Mengambil data detail produk
?>