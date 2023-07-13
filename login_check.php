  <?php
    extract($_POST);
    include('connectdb.php');

    $pswhash=md5($password);
    $sql="SELECT * FROM users WHERE username='$username' and password='$pswhash'";
    mysqli_query($con,$sql);

      if( mysqli_affected_rows($con)===1) {
        session_start();
        $_SESSION["username"]=$username;
        header("Location: management.php");
      } else {
        header("Location: login.php?message=wrong username or password");
      }
  ?>