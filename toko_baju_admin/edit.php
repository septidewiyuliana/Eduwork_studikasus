<!DOCTYPE html>
<html>

<head>
    <title>Edit Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include "connection.php";
    $id_barang = $_GET['id_barang'];
    $products = mysqli_query($conn, "SELECT * from produk WHERE id_barang = '$id_barang'");

    foreach ($products as $product) {
        $id_barang = $product["id_barang"];
        $nama_produk = $product["nama_produk"];
        $harga = $product["harga"];
        $stok = $product["stok"];
        $gambar = $product["gambar"];
        $keterangan = $product["keterangan"];
    }
    ?>
    <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
     <div class="form-group">
        <label for="nama_produk">Name:</label>
        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $nama_produk; ?>">
    </div>
    <div class="form-group">
        <label for="harga">Price:</label>
        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>">
    </div>
    <div class="form-group">
        <label for="stok">Stock:</label>
        <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>">
    </div>
    <div class="form-group">
        <label for="gambar">Picture:</label>
        <img src="images/<?php echo $gambar; ?>" alt="<?php echo $nama_produk; ?>">
        <input type="file" class="form-control" id="gambar" name="gambar" value="image/<?php echo $gambar; ?>">
    </div>
    <div class="form-group">
        <label for="email">Description:</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $keterangan; ?>">
     <button type="submit" class="btn btn-primary"  name="update">Simpan Perubahan</button>
</form>

</body>

</html>