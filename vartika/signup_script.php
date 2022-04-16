 <?php
require 'includes\common.php';
// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
$email=mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$phone = $_POST['phone'];  
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_password = "/(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
$regex_num = "/^[789][0-9]{9}$/"; 
$p=md5($password);
$sq="select email from users where email='$email'";
$sqr=mysqli_query($con,$sq);
$n=mysqli_num_rows($sqr);
if($n>0){
    echo("<script>alert('Email address is already registered!')</script>");
   echo("<script>location.href='signup.php'</script>");   
}else if (!preg_match($regex_email, $email)) {
   echo("<script>alert('Not a valid Email Id')</script>");
   echo("<script>location.href='signup.php'</script>");
 } else if (!preg_match($regex_password, $password)) {
    echo("<script>alert('Password must contain UpperCase, LowerCase, Number/SpecialChar and min 6 Characters')</script>");
    echo("<script>location.href='signup.php'</script>");
 }else if (!preg_match($regex_num, $phone)) {
   echo("<script>alert('Not a valid phone number')</script>");
   echo("<script>location.href='signup.php'</script>");
 } 
else{
$user_registration_query = "insert into users(email,name,contact,password,city,address)
values ('$email', '$name', '$phone', '$p','$city','$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or
die(mysqli_error($con));
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
echo("<script>alert('User successfully registered!')</script>");
echo("<script>location.href='mainpage.php'</script>"); }
?> 