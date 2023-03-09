<?php
  include('repeat/connection.php');
  require('add_to_cart.php');
  require('func.php');

  $obj=new add_to_cart();
  $totalProduct=$obj->totalProduct();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Jewellery</title>
  </head>

  <body>

<!-- HEADER START -->

  <header>

    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <div class="logo">
            <a href="#"><img src="images/samsung logo.png" alt=""></a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="navigation">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="ourmenu.php">Shop</a></li>
              <li><a href="contactus.php">Contact Us</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3">
          <div class="icons">
            <ul>
              <?php 
                if(isset($_SESSION['USER_LOGIN'])){
                   echo '<li><a href="logout.php" class="fa fa-sign-out fa-2x"></a></li>';
                }
                else{
                  echo '<li><a href="login.php" class="fa fa-user fa-2x"></a></li>';
                }
              ?>
              <li><div class="htc__shopping__cart">
                    <a class="cart__menu" href="#"><i class="fa fa-shopping-cart fa-3x"></i></a>
                      <a href="addtocart.php"><span class="htc__qua"><?php echo $totalProduct?></span></a>
                   </div></li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </header>

<!-- HEADER END -->

