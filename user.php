<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS\user.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
        <h2>Create An Account</h2>
    </div>
    <form action="user.php" method="post">
    <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
        </div>
        <div class="input-group">
            <label>Email Id</label>
            <input type="email" name="emailid" value="<?php echo $emailid; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
  	        <button type="submit" class="btn" name="reg_user">Register</button>
  	    </div>
  	    <p>
  		    Already a member? <a href="signin.php">
              <button class="btn">Sign In</button>
              </a>
  	    </p>

    </form>
</body>
</html>