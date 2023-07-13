<?php
  $sql="delete from products where product_id='$_GET[productid]'";
  include('connectdb.php');
  mysqli_query($con,$sql);
  if(mysqli_affected_rows($con)===1) {
    header("Location:management.php?message='delete product $_GET[productid] successful!'");
  } else {
    header("Location:management.php?message='delete product $_GET[productid] failed'");
  }
?>