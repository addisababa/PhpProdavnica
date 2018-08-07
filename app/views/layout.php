<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= Configuration::BASE_URL?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
    <title>iShopping</title>
</head>
<body>
<section id="navbar" class="fixed-top">
    <nav class="navbar navbar-expand-lg p-0 m-1">
     <small class="tel d-none d-md-block d-lg-block d-xl-block">Telefon:065 / 555-5555</small>
      <div class="login ml-auto pr-5 float-right">


          <!-- <form class="form-inline" method='post' action="<?= Configuration::BASE_URL?>loginForm">
              <div class="form-group">                              
                  <input type="text" name="username" placeholder="Username..." class="form-control form-control-sm mr-1" required pattern='^[a-z0-9]{4,}$'>
                  <input type="password" name="password" placeholder="Password..." class="form-control form-control-sm" required pattern='^.{6,}$'>
              </div>
              <button type="submit" class="btn btn-outline-light loginbtn btn-sm ml-1" >Login</button>
              <a href="<?= Configuration::BASE_URL?>login" class="registerButton ml-3" role="button">Registruj Se</a>
          </form> -->
          <a href="<?= Configuration::BASE_URL?>loginForm" class="registerButton ml-3" role="button">Login</a>
          <a href="<?= Configuration::BASE_URL?>register" class="registerButton ml-3" role="button">Registruj Se</a>
          <a href="<?= Configuration::BASE_URL?>logout" class="registerButton ml-3" role="button">Logout</a>
        


      </div>
    </nav>
    <nav class="navbar navbar-expand-md navBot navbar-dark">
      <div class="row">
        <div class="col-md-3 text-right border-right navMobile">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand pl-5 text-sm-left" href="index.php">iShopping.</a>
          <a href="cart.php" class="ml-auto pt-1 shopCart text-white text-right d-none d-block d-md-none pr-0 float-right d-lg-none d-xl-none"><i class="fas fa-shopping-cart"></i></a>
        </div>
        <div class="col-md-6 border-right">
          <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item pr-3">
              <a class="nav-link" href="<?= Configuration::BASE_URL?>home">Početna</a>
            </li>
            <li class="nav-item pr-3">
              <a class="nav-link" href="<?= Configuration::BASE_URL?>products">Prodavnica</a>
            </li>
            <li class="nav-item pr-3">
              <a class="nav-link" href="<?= Configuration::BASE_URL?>contact">Kontakt</a>
            </li>
          </ul>
        </div>
        </div>
        <div class="col-md-3 text-sm-right d-none d-md-block d-lg-block">
        <?php
        if(Session::exists('user_id')){
        echo '<p>'.$_SESSION['username'].'</p>';
        }

        ?>
          <a href="#" class="text-white font-weight-light">Korpa</a>
          <a href="Cart.php" class="ml-auto pr-5 pt-1 shopCart text-white"><i class="fas fa-shopping-cart"></i></a>
        </div>
      </div>
    </nav>
</section>


[VIEW]

<div class="newsletter text-light pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 p-0 text-left">
        <img src="img/envelope.png">
        <h3 class="d-inline ml-2 align-middle">NEWSLETTER</h3>
      </div>
      <div class="col-md-3">
        Passage of Lorem Ipsum, you need tobenm.
      </div>
      <div class="col-md-6">
        <form class="form-inline mt-1">
           <div class="form-group mb-2">
            <label for="inputPassword2" class="sr-only"></label>
            <input type="email" class="form-control" id="" placeholder="Email">
          </div>
          <button type="submit" class="btn btn-outline-success mb-2">Prijavi se</button>
        </form>
      </div>
    </div>
  </div>
</div>
<section id="footer" class="text-light pb-5 pt-5 border-bottom border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center  border-right border-secondary">
        <a href="#"><h2 class="">iShopping.</h2></a>
      </div>
      <div class="col-md-3 text-center border-right border-secondary">
        <span class="mb-1">
          CUSTOMER CARE
        </span><br>
        <ul class="pl-0 pt-3">
          <a href="#"><li>Shipping Policy ></li></a>
          <a href="#"><li>Returns Policy ></li></a>
          <a href="#"><li>Contact Us ></li></a>
          <a href="#"><li>About Us ></li></a>
        </ul>
      </div>
      <div class="col-md-3 text-center border-right border-secondary">
        <span class="mb-1">
          QUICK LINKS
        </span><br>
        <ul class="pl-0 pt-3">
          <a href="#"><li>Men's Wear ></li></a>
          <a href="#"><li>Women's Wear ></li></a>
        </ul>
      </div>
      <div class="col-md-3 text-center">
        <span>STAY CONNECTED</span><br>
        <div class="social mt-3">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="copyright" class="text-center p-3 text-light">
  <p class="d-inline">Copyright @ iShopping. 2018</p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php Configuration::BASE_URL?>slick/slick.min.js"></script>
<script type="text/javascript" src="<?php Configuration::BASE_URL?>js/slickSettings.js"></script>
<script type="text/javascript" src="<?php Configuration::BASE_URL?>js/slider1.js"></script>
<script src="<?php Configuration::BASE_URL?>js/navbarScroll.js"></script>

</body>
</html>