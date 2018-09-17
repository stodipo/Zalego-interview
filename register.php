<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="first_name" placeholder="Enter First Name">
  	</div>
      <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="last_name" placeholder="Enter last Name">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter Username">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" placeholder="Enter Password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	  <button type="reset" class="btn" name="reset">Clear</button>
  	</div>
  	<p>
  		Already a User? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>