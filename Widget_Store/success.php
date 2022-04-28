<?php
require 'includes\common.php';
if (!isset($_SESSION['email'])) {
    header('location: mainpage.php'); }
    $rs=$_GET['id'];
    $i=rtrim($rs,",");
    $user_id=$_SESSION['id'];
    //We will change the status of the items purchased by the user to 'Confirmed'
    $u_q="update users_items set status='Confirmed' where user_id='$user_id' and item_id in ($i) and status='Added to cart'";
    $u_q_r=mysqli_query($con,$u_q);
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>success</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        .alert-success{
            background-color:rgba(51,204,51,0.7);
        }
        .fa{
            color:blue;
        }
    </style>
</head>
<body>
<?php
include 'includes\header.php';
?>
<div class="container">
    <div class="row text-center">
        <div class="col-xs-12 ">    
            <h4>Thank you for shopping with us. We shall dispatch the order shortly.</h4>
            <hr>
            <p style="font-size:20px;">
            To place a fresh order, click<a href="products.php"><span style="color:blue;"> here.</span></a> 
            </p>
        </div>
    </div>
</div>   
<?php
include 'includes\footer.php';
?>  
</body>
</html>