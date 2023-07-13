<?php
  extract($_POST);
  include("connectdb.php");
  $sql= "UPDATE products SET product_name='$productname',overview='$overview',model_no='$modelNo',price='$price',image_1='$img1',image_2='$img2',image_3='$img3',image_4='$img4' WHERE product_id='$productid'";
  mysqli_query($con, $sql);
  if(mysqli_affected_rows($con)===1) {
    header("Location:management.php?message='Edit product successful'");
  } else {
    header("Location:management.php?message='No product is edited'");
  }
?>