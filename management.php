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

    img{
      width: 100px;
    }
    .heading {
      text-align: center;
      margin-top: 20px;
    }

    @media screen and (max-width: 780px) {
      img{
      width: 50px;
      }
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
    <h1 class="heading">Product management system</h1>

    <?php
      if(isset($_GET['message'])){
        echo "<div class='alert alert-danger' role='alert'>
        $_GET[message]
      </div>";
      }
    ?>
    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">Product ID</th>
          <th scope="col">Image</th>
          <th scope="col">Product name</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        
          <?php
            include('connectdb.php');

            $result = mysqli_query($con,"SELECT * FROM products");
            while($product = mysqli_fetch_array($result)) { 
              echo 
              "<tr>
                <th scope='row'>$product[product_id]</th>
                <td><img src=$product[image_1]></td>
                <td>$product[product_name]</td>
                <td>$product[price]</td>
                <td>
                  <a href='edit.php?productid=$product[product_id]'>Edit,</a>
                  <a href='delete.php?productid=$product[product_id]'>Delete,</a>
                  <a href='product.php?productid=$product[product_id]'>Preview</a>
                </td>
              </tr>";
            }
          ?>
      </tbody>
    </table>
  </div>  
</body>

</html>