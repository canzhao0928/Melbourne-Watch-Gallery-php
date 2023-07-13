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
  <!-- Navigation bar -->
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

  <div class="p-5 product-main-container">
      <?php
        $productID=$_GET['productid'];
        include('connectdb.php');

        $sql="SELECT * FROM products WHERE product_id='$productID'";
        $product=mysqli_fetch_array(mysqli_query($con,$sql));
        echo "
    <div class='product-imgs'>
      <img class='product-main-img'
        src='$product[image_1]'
        alt='$product[product_name]'>
      <div class='product-img-gallery'>
        <img onmouseover='enlargeImg(this)' class='grey-border'
          src='$product[image_1]'
          alt='$product[product_name]'>
        <img onmouseover='enlargeImg(this)' class='grey-border'
          src='$product[image_2]'
          alt='$product[product_name]'>
        <img onmouseover='enlargeImg(this)' class='grey-border'
          src='$product[image_3]'
          alt='$product[product_name]'>
        <img onmouseover='enlargeImg(this)' class='grey-border'
          src='$product[image_4]'
          alt='$product[product_name]'>
      </div>
    </div>
    <div class='product-info'>
      <h2 id='itemName'>$product[product_name]</h2>
      <p class='text-body-secondary'>MODEL: $product[model_no]</p>
      <h2 id='itemPrice'>$$product[price]</h2>
      <button onclick='addToCartProdect(this)' class='btn btn-primary btn-text'>Add to Cart</button>
      <h2 class='mt-100'>Product Overview</h2>
      <p class='pe-3'>$product[overview]</p>
    </div>
    ";
      ?>
    <div class='product-grid-col-3 shoppingCart-container'>
      <div id='cart'>
      </div>

      <div class='shoppingCart-total'>
        <div class='shoppingCart-total-price'>
          <p>Total</p>
          <p id='totalPrice'>$1120</p>
        </div>
        <button class='shoppingCart-total-btn btn btn-success btn-text'>Check out <span
            class='badge bg-secondary'>0</span></button>
      </div>
    </div>
    
  </div>
</body>

</html>