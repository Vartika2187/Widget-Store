<style>
a {
    color: #9d9d9d;
  }
a:hover {
    color: white;
  } 
h3 {
    margin:0px 0px 3px 0px;
    }
.tables>tbody>tr>td{
    padding: 0px;
    border:0;
    margin:0;
    }
.footer{
    padding:10px;
    bottom:-20px;
}
</style>
<footer class="footer">
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-12">
                <div class="table-responsive" >
                    <table class="table text-justified tables" >
                        <tdata >
                        <?php 
                        if(isset($_SESSION['email']))
                        { ?>
                           <tr >
                                <td><h3>Information</h3></td>
                                <td><h3>My Account</h3></td>
                                <td><h3>Contact Us</h3></td>
                            </tr>
                            <tr >
                                <td><a href="aboutus.php">About Us</a></td>
                                <td ><a href="logout.php">Logout</a></td> 
                                <td>Contact: +91-123-000000</td>
                            </tr>
                            <tr>
                                <td><a href="contactus.php">Contact Us</a></td>
                                <td><a href="signup.php">Signup</a></td>
                            </tr>
                            <?php } else
                            {   ?>
                            <tr>
                                <td><h3>Information</h3></td>
                                <td><h3>My Account</h3></td>
                                <td><h3>Contact Us</h3></td>
                            </tr>
                            <tr>
                                <td><a href="aboutus.php">About Us</a></td>
                                <td ><a href="#myModal" data-toggle="modal" data-target="#myModal">Login</a></td> 
                                <td>Contact: +91-123-000000</td>
                            </tr>
                            <tr>
                                <td><a href="contactus.php">Contact Us</a></td>
                                <td><a href="signup.php">Signup</a></td>
                            </tr>
                            <?php } ?>
                        </tdata>
                    </table>
                </div>
            </div>
        </div>
    </div>
</footer> 
<?php
include "includes\modal.php";
?>