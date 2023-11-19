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
            <form action="proses_upload.php" method="post">
                <table class="table">
                    <tr>
                        <td><label for="nama_barang">Product Name:</label></td>
                        <td><input type="text" class="form-control" id="nama_barang" name="nama_barang" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="harga">Price:</label></td>
                        <td><input type="number format" class="form-control" id="harga" name="harga" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="gambar">Picture:</label></td>
                        <td><input type="file" class="form-control" id="gambar" name="gambar" required="" autocomplete="off"></td>
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
