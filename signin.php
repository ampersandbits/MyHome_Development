<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Signin</title>
  <link rel="stylesheet" type="text/css" href="CSS\user.css">
</head>
<body>
  <div class="header">
  	<h2>Sign In</h2>
  </div>
	 
  <form method="post" action="signin.php">
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
  	<p>
  		Not yet a member? <a href="user.php">Sign up</a>
  	</p>
  </form>
</body>
</html>