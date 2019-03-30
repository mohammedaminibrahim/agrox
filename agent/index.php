<?php
    $page_title = 'AgroX | Home';
    include '../dbh/db.php';
    include '../dbh/db_functions.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AgroX</title>
  <link rel="icon" type="image/png" href="img/logo2.png">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <!-- navigation bar starts here -->
  <nav class="navbar navbar-dark bg-success navbar-expand-lg py-0 sticky-top">
    <div class="container">
      <a href="#" class="navbar-brand">AgroX</a>
      <div class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </div>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <!-- Left navigation links -->
        <ul class="navbar-nav">
          <li class="nav-item px-2 <?php if($page_title == 'AgroX | Home'){echo 'active';} ?>">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item px-2 <?php if($page_title == 'AgroX | About'){echo 'active';} ?>">
            <a href="orders.php" class="nav-link">About us</a>
          </li>
        
          <li class="nav-item px-2 <?php if($page_title == 'AgroX | Contact'){echo 'active';} ?>">
            <a href="expenses.php" class="nav-link">Contact us</a>
          </li>
        </ul>
        <!-- Left navigation ends links -->

        <!-- right navigation links -->
        <ul class="navbar-nav ml-auto">
          <!-- account options -->
          <li class="nav-item px-2 active dropdown">
           <form action="logout.php" method="get">
             <a href="../index.php" class="nav-link"><span class="fa fa-sign-out"></span> Logout</a>
           </form>
  
          </li>
        </ul>
        <!-- right navigation links -->
      </div>
    </div>
  </nav>
  <!-- Nav ends here -->
  <div class="header bg-light">
    <div class="container p-3">
      <h1><span class="fa fa-user"></span> Agent</h1>
    </div>
  </div>





  <div class="container my-5">


      <div class="row">

        <div class="col-md-4">
          <div class="card bg-primary mb-3">
            <img src="img/veg5.png" alt="" class="card-img img-responsive" style="height:250px;">
            <div class="card-img-overlay text-center text-white">
              <h3>Cereals</h3>
              <h1 class="display-4">6</h1><br>
              <a href="cereals.php" class="btn btn-sm btn-outline-light">View product</a>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card bg-primary mb-3">
            <img src="img/veg6.png" alt="" class="card-img img-responsive" style="height:250px;">
            <div class="card-img-overlay text-center text-white">
              <h3>Vegetables</h3>
              <h1 class="display-4">2</h1><br>
              <a href="vegetables.php" class="btn btn-sm btn-outline-light">View</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-primary mb-3">
            <img src="img/veg5.png" alt="" class="card-img img-responsive" style="height:250px;">
            <div class="card-img-overlay text-center text-white">
              <h3>Fruits</h3>
              <h1 class="display-4">2</h1><br>
              <a href="fruits.php" class="btn btn-sm btn-outline-light">View</a>
            </div>
          </div>
        </div>
 
        
      </div>
  </div>


  <footer class="footer bg-success text-center text-white mt-5 py-5">
      <h3>AgroX</h3>
  </footer>
  



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

