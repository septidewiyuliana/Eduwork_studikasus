// Koneksi ke database
// ...
<?php 
include("../connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_barang = $_POST['id_barang'];
    $gambar = $_FILES['gambar']['tmp_name'];
    $nama_gambar = $_FILES['gambar']['name'];

    // Proses unggah gambar ke direktori di server
    $upload_directory = "images"; // Ubah dengan direktori penyimpanan gambar
    move_uploaded_file($gambar, $upload_directory . $nama_gambar);

    // Update path gambar di dalam database
    $sql = "UPDATE produk SET gambar = '$upload_directory $nama_gambar' WHERE id_barang = $id_barang";
    mysqli_query($conn, $sql);

    echo "Gambar berhasil diunggah dan database diperbarui!";
}
