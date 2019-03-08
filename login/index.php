<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body class="container">

<div class="row">
	<div class="col-sm-8">
		<h1>Registration Form</h1>
		<p style="color: green"><?php echo @$_SESSION['successmessage']; ?></p>
			<form action="../server/register_action.php" method="post" class="formMod">
				<div class="form-group">
		    		<label for="fname">First Name</label>
					<input type="text" name="firstName" class="form-control" placeholder="Your first name.." required>
				</div>
				<div class="form-group">
				    <label for="lname">Last Name</label>
				    <input type="text" name="lastName" placeholder="Your last name.." required class="form-control">
				</div>
			    <div class="form-group">
				    <label for="gender">Gender</label>
				    <select id="gender" name="gender" class="form-control">
				      <option value="male">Male</option>
				      <option value="female">Female</option>
				    </select>
			    </div>
			    <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" name="email" placeholder="Your Email.." required class="form-control">
				</div>
			    <div class="form-group">
					<label for="pnumber">Phone Number</label>
					<input type="tel" maxlength="11" id="pnumber" name="phoneNumber" placeholder="Your Phone Number.." pattern="{11}" required class="form-control">
				</div>
				<div class="form-group">
					<label for="pnumber">Password</label>
					<input type="password"  id="password" name="password" placeholder="Enter Password"  required class="form-control">
				</div>
			    <input type="submit" value="Create Account" class="btn btn-default">
  			</form>
	</div>
	<div class="col-sm-4">
		<h1>Login Form</h1>
		<form role="form" action="../server/login_action.php" method="post">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name= "password">
		  </div>
		  <button type="submit" value="Login" class="btn btn-primary">Login</button>
		</form>
	</div>
</div>

<?php

unset($_SESSION['successmessage']);
?>
</body>
</html>