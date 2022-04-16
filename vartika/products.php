<?php
include 'includes\common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Products</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        .jumbotron{
            background-color:rgba(69,102,255,0.8);
            color:white;
            padding:5px;
        }
   </style>
</head>
<body>
<?php
include 'includes\header.php';
include 'includes\Check-if-added.php';
?>
<div class="container">
    <!-- Jumbotron Header -->
    <div class="jumbotron">
        <center> <h1>Welcome to the Widget Store</h1>
        <p>You are one step closer to getting the best gadgets.</p>
        <p>The best deals of Widget Store will save you money today.</p></center>
    </div>
    <div class="container" id="TV" style="background-color:gray; border-radius:25px;">
        <b style="color:white;font-size:40px;"><center>Smart TV</center></b>
    </div><br>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="image/4Apro.png" class="img-responsive" alt="TV">
                <div class="caption">
                    <h3>Mi 4A Pro 39"</h3>
                    <P>Price:₹ 25000.00</P>      
                    <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"  data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { //We have created a function to check whether this particular product is added to cart or not.
                            if (check_if_added_to_cart(1)) //This is same as if(check_if_added_to_cart != 0)
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                             } ?>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="image\4Bpro.png" class="img-responsive" alt="TV">
                <div class="caption">
                    <h3>Mi 4B Pro 39"</h3>
                    <P>Price:₹ 30,000.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"   data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(2)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="image\4Cpro.png" class="img-responsive" alt="TV">
                <div class="caption">
                    <h3>Mi 4C Pro 39"</h3>
                    <P>Price:₹ 40,000.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"  data-toggle="modal" data-target="#myModal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(3)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="image\4X.png"class="img-responsive" alt="TV">
                <div class="caption">
                    <h3>Mi 4X Budget TV</h3>
                    <P>Price:₹ 14,999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal"  data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(4)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container" style="background-color:gray; border-radius:25px;">
        <b style="color:white;font-size:40px;"><center>Smartphones</center></b>
    </div><br>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\google.jpg" class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>Google Pixel</h3>
                        <P>4 Inch Display,4000mAh Battery, 4 GB RAM</P>
                        <P>Price:₹ 30,000.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(5)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\redmi.jpg" class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>Redmi Note 7</h3>
                        <P>6 Inch Display, 3600mAh Battery, 3 GB RAM</P>
                        <P>Price:₹ 10,999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(6)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\samsung.jpg" class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>Samsung Note 9</h3>
                        <P>6 Inch Display, 3200mAh Battery, 6 GB RAM</P>
                        <P>Price:₹ 59,999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(7)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\oppo.jpg"class="img-responsive" alt="phones">
                    <div class="caption">
                        <h3>Oppo A3</h3>
                        <P>7 Inch Display, 4200mAh Battery, 2 GB RAM</P>
                        <P>Price:₹ 9,999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(8)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="container" style="background-color:gray; border-radius:25px;">
        <b style="color:white;font-size:40px;"><center>Accessories</center></b>
        </div><br>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\router2.jpg" class="img-responsive" alt="acc" >
                    <div class="caption">
                        <h3>Mi Net Router</h3>
                        <P>Price:₹ 2729.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(9)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\remote.png" class="img-responsive" alt="acc">
                    <div class="caption">
                        <h3>Mi Remote</h3>
                        <P>Price:₹ 999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(10)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\charger.jpg" class="img-responsive" alt="acc">
                    <div class="caption">
                        <h3>Mi Charger</h3>
                        <P>Price:₹ 499.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(11)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\pb.png"class="img-responsive" alt="acc">
                    <div class="caption">
                        <h3>Mi Powerbank</h3>
                        <P>Price:₹ 1,999.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(12)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="container"style="background-color:gray; border-radius:25px;">
        <b style="color:white;font-size:40px;"><center>Audio</center></b>
        </div><br>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\airpod.jpg" class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>Airpods Basic</h3>
                        <P>Price:₹ 20,000.00</P>      
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a  href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(13)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                             } ?>  
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\headphones.jpg" class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>Headphones 4D</h3>
                        <P>Price:₹ 1,499.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(14)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\earphones.jpg" class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>2D Earphones</h3>
                        <P>Price:₹ 199.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(15)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="image\neckphone.jpg"class="img-responsive" alt="headphones">
                    <div class="caption">
                        <h3>Neckphones HD</h3>
                        <P>Price:₹ 1,699.00</P>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { ?> 
                        <p><a href="#myModal" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        } 
                        else { 
                            if (check_if_added_to_cart(16)) 
                            { 
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else { ?> 
                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary"  >Add to cart</button></a>
                            <?php }
                        } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
</div><br><br>
<?php
include 'includes\footer.php';
?>
</body>
</html>