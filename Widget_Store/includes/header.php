<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">         
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="mainpage.php" class="navbar-brand">
                <span style="color:red; margin-right: -2px;">W</span>
                <i class="glyphicon glyphicon-italic" style="margin: -2px;"></i>
                <span style="color:red; margin-left: -2px;">dget</span>
                <span>  Store</span>
                </a>
            </div>       
            <div class="collapse navbar-collapse" id="Mynavbar">
            <ul class="nav navbar-nav navbar-right ">
            <?php 
            if(isset($_SESSION['email']))
            { ?>
                <li ><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li ><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>       
                <li ><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li ><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>  
        <?php }else
                { ?>
                <li ><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                <li ><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li ><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li ><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li> 
        <?php } ?>  
          </ul>
        </div>
    </div>
</nav>
<?php
include "includes\modal.php";
?>