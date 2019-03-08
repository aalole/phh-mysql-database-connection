<!DOCTYPE html>
<?php 
session_start();

$email=$_SESSION['email'];

require_once('connect.php');

$result="SELECT * FROM users WHERE EmailAddress='$email' ";
$query=mysqli_query($conn,$result);
$row=mysqli_fetch_array($query);



?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>active users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
<body>
<p style= "color: green">welcome!!</P>
<?php echo $row['0']." ".$row['1']." ".$row['2'].$row['3']?>
</body>
</html>