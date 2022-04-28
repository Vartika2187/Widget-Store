<?php
include 'includes\common.php';
$t=null;
if (isset($_SESSION['messag'])) 
    {  
    $t=$_SESSION['messag'];
    unset($_SESSION['messag']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>signup</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        .form-control{
            width:20%;
        }
        .panel{
            border:none;
        }
        .input-group-addon{
            background-color:gray;
            color:white;
        }
        body{
            padding-top:80px;
        } 
   </style>
</head>
<body  style=" color:black;" >
<?php
include 'includes\header.php';
?>
<div class="container">  
    <div class="row">
    <div class="col-xs-12 col-md-6">
<img src="image/signup.png" style="height:450px;">
    </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center" style="font-size: 30px; background-color:#5dc9c8; color:white;">
                    <strong>SIGN UP</strong>
                    
                </div>
                <div class="panel-body">
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Name" name="name" required="true">
                                </div>   
                        </div>
                        <div class="form-group">
                            <div class="input-group" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" name="email"  required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-phone-alt"></span>
                                </div>
                                <input type="tel" class="form-control" placeholder="Contact Number" name="phone" maxlength="10" size="10" name="contact" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="City" name="city"  required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-home"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Address" name="address"  required="true" >
                                <?php  echo "<span style='color:red;'><br>$t</span>";?>
                            </div>
                        </div>
                        <div class="form-group" >                   
                            <button type="submit" class="btn btn-block btn-danger" value="Submit">SUBMIT</button>
                        </div> 
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