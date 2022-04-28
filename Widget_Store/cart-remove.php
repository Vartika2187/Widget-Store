<?php
include 'includes\common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
// Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
$d_q="delete from users_items where user_id='$user_id' and item_id='$item_id'";
$d_q_r=mysqli_query($con,$d_q);
header('location:cart.php');
?>