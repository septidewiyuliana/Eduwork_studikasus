<!DOCTYPE html>
<html>
<head>
    <title>New Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Add New item</h2>
        <div class="form-container">
            <form action="proses_upload.php" method="post" encytype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td><label for="nama_produk">Product Name:</label></td>
                        <td><input type="text" class="form-control" id="nama_produk" name="nama_produk" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="harga">Price:</label></td>
                        <td><input type="number format" class="form-control" id="harga" name="harga" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="stok">Stock:</label></td>
                        <td><input type="number" class="form-control" id="stok" name="stok" required="" autocomplete="off"></td>
                    </tr>
                    
                    <tr>
                        <td><label for="keterangan">Description:</label></td>
                        <td><input type="text" class="form-control" id="keterangan" name="keterangan" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="gambar">Picture:</label></td>
                        <td><input type="file" class="form-control" id="gambar" name="gambar" required="" autocomplete="off"></td>
                   </tr>
                   <tr>
                        <td><label for="kategori">Category:</label></td>
                        <td>
                            <select class="form-control" id="kategori" name="id_kategori" required="">
                                <option value="1">Bottoms</option>
                                <option value="2">Dress</option>
                                <option value="3">Tops</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
