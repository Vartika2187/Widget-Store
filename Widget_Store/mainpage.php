<?php
include 'includes\common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Bootstrap Core CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Index</title>
  <link rel="stylesheet" href="style.css" type="text/css"> 
  <style>
  .jumbotron{
    width:100%;
    padding-top: 3%;
    padding-bottom: 3%;
    margin-top: 6%;
    margin-bottom: 6%;
    background-color: rgba(0, 0, 0,0.8);
    font-size:35px;  
    border-radius:75px 0px 75px 0px;
    }
  </style>  
</head>
<body style="margin-top:-50px; margin-bottom:-200px; ">
<?php
include 'includes\header.php';
?> 
<div id="carousel-example-generic" class="carousel slide" data-interval="3000" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="color:red;">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/tvv1.jpg" alt="..." style="width:100%;" >
      <div class="carousel-caption">
        <div class="jumbotron" >
          Making you Smarter!<br>
          <a href="products.php"><button class="btn btn-warning btn-lg">Buy Now</button></a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="image/router1.jpg" alt="..." style="width:100%;">
      <div class="carousel-caption">
        <div class="jumbotron" >
        Access the inaccesible!<br>
        <a href="products.php"><button class="btn btn-warning btn-lg">Buy Now</button></a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="image/smartphone.jpg" alt="..." style="width:100%;">
      <div class="carousel-caption">
        <div class="jumbotron" >
        Connecting faster with the fastest!<br>
        <a href="products.php"><button class="btn btn-warning btn-lg">Buy Now</button></a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="image/audio.jpg" alt="..." style="width:100%;">
      <div class="carousel-caption">
        <div class="jumbotron" >
        Listen to your inner voice!<br>
        <a href="products.php"><button class="btn btn-warning btn-lg">Buy Now</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color:white;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:white;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
include 'includes\footer.php';
?>
</body>
</html>