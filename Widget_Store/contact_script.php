<?php
include 'includes\common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$message = mysqli_real_escape_string($con,$_POST['message']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    echo("<script>alert('Not a valid Email Id')</script>");
    echo("<script>location.href='contactus.php'</script>");
  }
else{
$select_query= " insert into contact (email, name, message) values ('$email','$name','$message')";
$user_result=mysqli_query($con,$select_query);
echo("<script>alert('Submitted!')</script>");
echo("<script>location.href='contactus.php'</script>");
}
?>