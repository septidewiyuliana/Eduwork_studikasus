<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
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
    .product-slider {
      width: 80%;
      margin: auto;
    }

    .product-slider img {
      width: 100%;
      height: auto;
    }

    .product-details {
      text-align: center;
      margin-top: 20px;
    }
  </style>

</head>

<body>
<?php
// Mendapatkan ID produk dari URL
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Query untuk mengambil detail produk berdasarkan ID
    $sql = "SELECT * FROM detail_produk WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            $product_name = $row['product_name'];
            $description = $row['description'];
            $price = $row['price'];
            // ... (Dapatkan data lainnya sesuai kebutuhan)

            // Tampilkan informasi produk dalam HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <!-- Your CSS styles -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="product-details">
            <h2><?php echo $product_name; ?></h2>
            <p>Description: <?php echo $description; ?></p>
            <p>Price: <?php echo $price; ?></p>
            <!-- Tambahkan informasi produk lainnya sesuai kebutuhan -->
        </div>
    </div>
</body>
</html>
<?php
        }
    } else {
        echo "Produk tidak ditemukan.";
    }

    // Menutup koneksi database
    $conn->close();
} else {
    echo "ID produk tidak ditemukan.";
}
?>

  <div class="container mt-5">
    <h1 class="text-center mb-4">Product Details</h1>

    <div class="product-slider">
      <div>
        <img src="../images/1.png" alt="Image 1">
      </div>
      <div>
        <img src="../images/2.png" alt="Image 2">
      </div>
      <!-- Add more images here -->
    </div>

    <!-- Product details -->
    <div class="product-details">
      <h3>Ruffle Cami Dress</h3>
      <p class="mb-3">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p><strong>Price: Rp. 352,000</strong></p>
    </div>
    
    </div>
  </div>

  <!-- jQuery and Slick Slider JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.product-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true
      });
    });
  </script>
</body>

</html>
