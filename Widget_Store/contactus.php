<?php
include 'includes\common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css" type="text/css">  
    <style>
        .fa{
            color:blue;
            }
    </style>
</head>
<body style="color:black;">
<?php
include 'includes\header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h3 style="color:blue;"><strong> Customer Support</strong></h3><br>
            <p style="color:gray;"> 24 x 7 @ 365  days a year support provided</p>
            <p align="justify">If you cannot reach out to us when you need us the most, we are not doingjustice with ourselves. Therefore, we have provided a round the clock support to the customers who remain loyal to us and not switch for freebies. It also becomes our duty to solve your issues that might have been troubling you since any moment. For that reason, we have a great network of technicians working tirelessly to attend to you at any time of the day. </p>
        </div>
        <div class="col-xs-12 col-md-6">
            <img src="image/contactus.jpg" alt="about us" height="130px">
        </div>
        </div><br>
        <div class="row">
        <div class="col-xs-12 col-md-6">
            <h3 style="color:blue;"><strong>Be Our Guest At</strong></h3><br>
            <h5>12, Rajiv Gandhi Road</h5>
            <h5>Block M Market, Greater Kailash Part 1</h5>
            <h5>Delhi, 110048 (INDIA)</h5>
            <h5><strong>Phone:</strong> (011) 223 4563</h5>
            <h5><strong>WhatsApp:</strong> 8877676543</h5>
            <h5><strong>Email:</strong> customers@gtg.com</h5>
            <h5><strong>Follow us:</strong>
                <a href="https://www.facebook.com/"> <i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/"> <i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com"> <i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com"> <i class="fa fa-linkedin"></i></a>
            </h5>
        </div>
       
        <div class="col-xs-12 col-md-6">
            <form method="POST" action="contact_script.php">
                <label><h3 style="color:blue;"><strong>Have Something to Say?</strong></h3></label>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required="true">  
                </div>
                <div class="form-group">
                    <label>Email</label>   
                    <input type="email" name="email" placeholder="Email"  class="form-control" required="true">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea  name="message" class="form-control" rows="5" cols="5" required="true"></textarea>
                </div>
                <div class="col-xs-12">
                    <div class="form-group"> <button type="submit" class="btn btn-primary btn-block">Submit</button></div> 
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php
include 'includes\footer.php';
?>
</body>
</html>