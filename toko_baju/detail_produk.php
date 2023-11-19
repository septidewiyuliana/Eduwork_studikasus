
<?php
// Include file koneksi ke database
include("connection.php");
if (isset($_GET['id_barang'])) {
    // Dapatkan nilai ID dari URL
    $id_barang = $_GET['id_barang'];

    // Query untuk mendapatkan data produk berdasarkan ID
    $query = "SELECT * FROM produk WHERE id_barang = $id_barang";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Periksa apakah data ditemukan
        if (mysqli_num_rows($result) > 0) {
            // Ambil data produk
            $row = mysqli_fetch_assoc($result);
            // Tampilkan informasi produk
            echo "Id_produk: " . $row['id_barang'] . "<br>";
            echo "Nama Produk: " . $row['nama_produk'] . "<br>";
            echo "Harga: " . $row['harga'] . "<br>";
            echo "Deskripsi: " . $row['deskripsi'] . "<br>";
            // Tambahkan tampilan lainnya sesuai kebutuhan Anda
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Bebaskan memory hasil query
    mysqli_free_result($result);
} else {
    echo "ID Produk tidak ditemukan.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Beauty  Wear
  </title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <meta charset="UTF-8">

  <title>Product Details - BeautyWear</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

  <style>
    /* Custom styles */
    
    .product-details {
      text-align: center;
      margin-top: 20px;

    }
  </style>
  
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Product Details</h1>


    <div class="img-box">
      <div>
        <img src="images/<?php echo $row['gambar']; ?>" alt="Image 1">
      </div>
     
    <!-- Product details -->
    <div class="product-details">
     
    </div>
  </div>

  <!-- jQuery and Slick Slider JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</body>

</html>
