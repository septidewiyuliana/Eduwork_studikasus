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
  <div class="container mt-5">
    <h1 class="text-center mb-4">Product Details</h1>

    <div class="product-slider">
      <div>
        <img src="../image/1.png" alt="Image 1">
      </div>
      <div>
        <img src="../image/2.png" alt="Image 2">
      </div>
      <!-- Add more images here -->
    </div>

    <!-- Product details -->
    <div class="product-details">
      <h3>Ruffle Cami Dress</h3>
      <p class="mb-3">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p><strong>Price: Rp. 352,000</strong></p>
    </div>
    <div class="mt-10">
        <button class="btn btn-success mr-3">Buy</button>
        <button class="btn btn-primary">Edit</button>
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
