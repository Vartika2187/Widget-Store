<?php
//This code checks if the product is added to cart. 
function check_if_added_to_cart($item_id)
{
    $con=mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));  // connecting to the database
    $user_id=$_SESSION['id']; //We'll get the user_id from the session
    // We will select all the entries from the user_items table where the item_id is equal to the item_id we passed to this function, user_id is equal to the user_id in the session and status is 'Added to cart'
    $s_q="select * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
    $s_q_r=mysqli_query($con,$s_q);
    $t_n_r=mysqli_num_rows($s_q_r);
   // We'll check if the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. If yes then it return 1 else it returns 0
    if($t_n_r>=1){
        return 1;
    }
    else{
        return 0;
    }
}
?>