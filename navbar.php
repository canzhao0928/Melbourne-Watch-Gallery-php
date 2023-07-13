<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php
            if( $_SERVER['REQUEST_URI'] == "/project/home.php"){
              echo "active";
            }
            ?>" href="home.php">Melbourne Watch Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
            if(preg_match( "/management.php/i",$_SERVER['REQUEST_URI']) === 1  || $_SERVER['REQUEST_URI'] == "/project/login.php"){
              echo "active";
            }
            ?>" href="management_check.php">Product Management</a>
          </li>
          <?php
            if( $_SERVER['REQUEST_URI'] == "/project/addproduct.php"){
              $isavtive="active";
            }
            session_start();
            if(isset($_SESSION['username'])){
              echo "
              <li class='nav-item'>
              <a class='nav-link $isavtive' href='addproduct.php'>Add new product</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='logout.php'>Logout</a>
              </li>";
            }
          ?>
        </ul>

        <?php
            if(isset($_SESSION['username'])){
              echo "
              <span class='navbar-text mx-3'>username: $_SESSION[username]</span>";
            }
          ?>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </nav>