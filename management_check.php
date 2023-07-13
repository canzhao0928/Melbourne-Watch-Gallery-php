<?php
  session_start();
  if(isset($_SESSION['username'])){
    header('LOCATION: management.php');
  } else {
    header('LOCATION: login.php');
  }
?>