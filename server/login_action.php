<?php
session_start();

require_once('connect.php');

$email=$_POST['email'];
$password=$_POST['password'];
//echo $email;
//echo $password;
$result="SELECT * FROM `users` WHERE `EmailAddress`='$email' AND `password`='$password'";
$query=mysqli_query($conn,$result);
$row=mysqli_fetch_array($query);
if($row == true) {
  $_SESSION['email']=$email;
  header("location:welcome_action.php");
}
else{
    echo 'noooooooooooooooooooooooooooooooooooo';
}


?>