<?php
  extract($_POST);
  include('connectdb.php');
  $sql="insert into products (product_name, overview, model_no,price, image_1,image_2,image_3,image_4) values ('$productname','$overview','$modelNo','$price','$img1','$img2','$img3','$img4')";
  mysqli_query($con,$sql);
  if(mysqli_affected_rows($con)===1) {
    header("Location:management.php?message='Add a new product'");
  } else {
    header("Location:management.php?message='Add a new product failed'");
  }
?>