<?php
  session_start();
  session_unset();
  header('LOCATION:login.php')
?>