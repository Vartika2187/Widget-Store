<?php
require 'includes\common.php';
if (!isset($_SESSION['email'])) {
    header('location: mainpage.php'); }

?>

<!DOCTYPE html>
<html >
<head>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Settings</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
 .fa{
    color:blue;
}
    </style>
</head>
<body >
    
  <?php
  require 'includes\header.php';
  ?>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <form method="POST" action="Settings_script.php">
                    <div class="form-group">
                        <label style="font-size: 20px;">Change Password</label>
                        <input type="password" class="form-control" placeholder="Old Password" name="old_password" pattern=".{6,}" required="true">
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control"  placeholder="New Password (Min. 6 characters)" name="new_password" pattern=".{6,}" required="true">
                    </div>
                 
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Verify New Password" name="re_type_new_password" pattern=".{6,}" required="true">
                
                             </div>
                    <button type="submit" class="btn btn-primary" value="Submit">Done</button>

                </form>
            </div>
        </div>
    </div>

    <?php
   include 'includes\footer.php';
   ?>

</body>
</html>