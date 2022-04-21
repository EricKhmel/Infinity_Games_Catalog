<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav><script src="nav.js"></script></nav>

<div class="header"><h2>Login</h2></div>
<!--Login form, posts the user login information to the 
MySQL query and determines if a user can login or not-->	 
<form method="post" action="login.php">
	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <!--If not a member yet, redirect to register page-->
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
</form>
</body>
</html>