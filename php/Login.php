<?php
$con = mysqli_connect("localhost","root",null,"fireworks_business");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 

<html>
<head>
<title> Login Form </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
		<h1>Employee Login Portal</h1>
		<form>
			<p>Username</p>
			<input type="text" name="" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="" placeholder="Enter Password">
			<input type="Submit" name="" value="Login">
			<a href="#">Lost your password?</a><br>
			<a href="#">Don't have an account?</a>
		</form>
	<div>	
</body>
</html>