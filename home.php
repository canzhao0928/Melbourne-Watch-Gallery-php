<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <title>Melbourne Watch Gallery</title>
</head>

<body onload="displayShoppingCart()">

  <?php
    include('navbar.php');
  ?>

  <!-- Header -->
  <div class="grid-center">
    <div class="header">
      <a href="home.php"> <img class="logo" src="images/logo.jpg" alt=""></a>
      <h1>Melbourne Watch Gallery</h1>
    </div>
  </div>

  <div class="main-container">
    <div class="grid-3-col">
      <?php
        include('connectdb.php');
        $sql="SELECT * FROM products";
        $products=mysqli_query($con,$sql);
        while($product = mysqli_fetch_array($products) ){
          echo "
          <div class='product-container'>
            <a href='product.php?productid=$product[product_id]'>
              <h2 class='heading-secondary'>$product[product_name]</h2>
              <img class='product-img'
                src='$product[image_1]'
                alt='$product[product_name]'>
            </a>
            <div class='price-container mb-1'>
              <p class='price-text'>$$product[price]</p>
              <button onclick='addToCartHome(this)' class='btn btn-info btn-text'>Add to cart</button>
            </div>
          </div>";
        }
      ?>
    </div>
    <div class="shoppingCart-container">
      <div id="cart">
      </div>
      <div class="shoppingCart-total">
        <div class="shoppingCart-total-price">
          <p>Total</p>
          <p id="totalPrice">$1120</p>
        </div>
        <button class="shoppingCart-total-btn btn btn-success btn-text">Check out <span
            class="badge bg-secondary">0</span></button>
      </div>
    </div>
  </div>
</body>

</html>