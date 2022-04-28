<?php
include 'includes\common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$s_q="insert INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$s_q_r=mysqli_query($con,$s_q);
header('location:products.php');
?>