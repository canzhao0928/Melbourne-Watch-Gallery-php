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
  <title>Melbourne Watch Gallery</title>
  <style>
    .heading {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <!-- Navigation bar -->
  <?php
    include('navbar.php');
  ?>

  <!-- Header -->
  <div class="grid-center">
    <div class="header">
      <a href="index.html"> <img class="logo" src="images/logo.jpg" alt=""></a>
      <h1>Melbourne Watch Gallery</h1>
    </div>
  </div>

  <div class="container table-responsive">
    <h1 class="heading">Product management system - Add new product</h1>
    <form method="post" action="addproduct_check.php">
      <div class="mb-3">
        <label for="productname" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="productname" aria-describedby="text" name="productname" required>
      </div>
      <div class="mb-3">
        <label for="modelNo" class="form-label">Model No.</label>
        <input type="text" class="form-control" id="modelNo" name="modelNo" required>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" required>
      </div>
      <div class="mb-3">
        <label for="overview" class="form-label">Overview</label>
        <!-- <input type="text" class="form-control" id="overview" name="overview" required> -->
        <textarea class="form-control" name="overview" id="overview" required></textarea>
      </div>
      <div class="mb-3">
        <label for="img1" class="form-label">Image 1</label>
        <input type="text" class="form-control" id="img1" name="img1" required>
      </div>
      <div class="mb-3">
        <label for="img2" class="form-label">Image 2</label>
        <input type="text" class="form-control" id="img2" name="img2" required>
      </div>
      <div class="mb-3">
        <label for="img3" class="form-label">Image 3</label>
        <input type="text" class="form-control" id="img3" name="img3" required>
      </div>
      <div class="mb-3">
        <label for="img4" class="form-label">Image 4</label>
        <input type="text" class="form-control" id="img4" name="img4" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
  </div>  
</body>

</html>