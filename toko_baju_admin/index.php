<?php
include("connection.php");
$query = mysqli_query($conn, "SELECT * FROM produk");

?>
<!DOCTYPE html>
<html>

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
    Beauty Wear
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Beauty Wear Admin
          </span>
        </a>
       
    <!-- end header section -->

  </div>
  <!-- end hero area -->
  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h4>
          List Products
        </h4>
      </div>

      <div class="row">
        <?php
        // Loop through the products and generate HTML dynamically
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
              <div class="img-box">
                <img src="images/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama_produk']; ?>">
              </div>
              <div class="detail-box">
                <h6>
                  <?php echo $row['nama_produk']; ?>
                </h6>
                <h6>
                  Price
                  <span>
                    <?php echo 'Rp.' . $row['harga']; ?>
                  </span>
                </h6>
              </div>
              
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </div>
            <div class="mt-3 detail-box justify-content-between d-flex">
    <a class="btn btn-primary" href="edit.php?id_barang=<?php echo $row['id_barang']; ?>">Edit</a>
    <a class="btn btn-danger" href="delete.php?id_barang=<?php echo $row['id_barang']; ?>" onclick="return confirm ('Hapus data ini?')">Delete</a>
</div>

          </div>
         
        <?php
        }
        ?>
      </div>
      <a class="mt-5 btn btn-success " href="upload.php"> Add Product</a>
    </div>
    
  </section>

  <!-- end shop section -->



  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>