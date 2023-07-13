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


 
  <!-- login  -->
  <div class="container mt-5">
     <!-- login error msg  -->
  <?php
    if(isset($_GET['message'])){
      echo "<div class='alert alert-danger' role='alert'>
      $_GET[message]
    </div>";
    }
  ?>
    <form method="post" action="login_check.php">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="text" name="username">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>