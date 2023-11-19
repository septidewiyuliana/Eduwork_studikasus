<?php
include_once "connection.php";

if (!isset($_POST['id_barang'])) {
    die("Error: ID barang tidak ditemukan.");
}

// Proses form edit data
$id_barang = $_POST["id_barang"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$gambar = $_POST["gambar"];
$keterangan = $_POST["keterangan"];

// Perbaikan pada query UPDATE
$sql = "UPDATE PRODUK SET nama_produk='$nama_produk', harga='$harga', stok='$stok', gambar='$gambar', keterangan='$keterangan' WHERE id_barang='$id_barang'";

if ($conn->query($sql) === TRUE) {
    echo "Data produk berhasil diubah.";
    header("Location: index.php"); // Pindah ke halaman utama setelah berhasil mengubah data
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
