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

    .invisible{
      display: none;
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
    <h1 class="heading">Product management system - Edit product</h1>
    <?php
      include('connectdb.php');
      $sql="select * from products where product_id = '$_GET[productid]'";
      $row= mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
    <form method="post" action="editproduct_check.php">
      <div class="mb-3">
        <label for="productname" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="productname" aria-describedby="text" name="productname" value="<?php echo $row['product_name']?>" required>
      </div>
      <div class="mb-3">
        <label for="modelNo" class="form-label">Model No.</label>
        <input type="text" class="form-control" id="modelNo" name="modelNo" value="<?php echo $row['model_no']?>" required>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']?>" required>
      </div>
      <div class="mb-3">
        <label for="overview" class="form-label">Overview</label>
        <!-- <input type="text" class="form-control line-height" id="overview" name="overview" value="<?php echo $row['overview']?>"> -->
        <textarea class="form-control" name="overview" id="overview" required><?php echo $row['overview']?></textarea>
      </div>
      <div class="mb-3">
        <label for="img1" class="form-label">Image 1</label>
        <input type="text" class="form-control" id="img1" name="img1" value="<?php echo $row['image_1']?>" required>
      </div>
      <div class="mb-3">
        <label for="img2" class="form-label">Image 2</label>
        <input type="text" class="form-control" id="img2" name="img2" value="<?php echo $row['image_2']?>" required>
      </div>
      <div class="mb-3">
        <label for="img3" class="form-label">Image 3</label>
        <input type="text" class="form-control" id="img3" name="img3" value="<?php echo $row['image_3']?>" required>
      </div>
      <div class="mb-3">
        <label for="img4" class="form-label">Image 4</label>
        <input type="text" class="form-control" id="img4" name="img4" value="<?php echo $row['image_4']?>" required>
      </div>
        <input type="text" class="invisible" name="productid" value="<?php echo $row['product_id']?>">
      <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
  </div>  
</body>

</html>