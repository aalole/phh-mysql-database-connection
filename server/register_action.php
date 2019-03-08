<?php

session_start();

require('connect.php');

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phonenumber = $_POST['phoneNumber'];
$password = $_POST['password'];

echo $email;

$query= "INSERT INTO users (firstName, lastName, gender, EmailAddress, phoneNumber, password) 
VALUES('$firstname', '$lastname', '$gender', '$email', '$phonenumber', '$password')";


if (mysqli_query($conn, $query)) {
    // echo "New record created successfully";
    $_SESSION['successmessage'] = "New record created successfully";
    header("location:../login/");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
