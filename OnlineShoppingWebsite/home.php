<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anusha Saree Store</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="home.php">Anusha Saree Store</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="index.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
	<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
					<div class="page-header">
						<h1>Welcome to My Advanced Software Engineering project</h1>
					</div>
					<p>
						<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
						<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
					</p>
                </div>
            </div>        
        </div>
    </div>

    <img data-interchange="[images/Home.jpg, (retina)], [images/Home.jpg, (large)], [images/Home.jpg, (mobile)], [images/Home.jpg, (medium)]">
    <noscript><img src="images/Home.jpg"></noscript>

  </body>
</html>
