<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Arcadia Library - Register</title>
    <script type="text/javascript" src="js/jquery.js">
    </script>
    <!-- Import Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- Import Local CSS -->
    <link rel="stylesheet" href="../style.css" />
    <!-- Import icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
  <div class="login">
    <img src="../img/logo_arc.png">
    <center>
        <h4>Register</h4>
    </center>
    <form action="" method="post">
    <center>
    <div class="input-field col s6">
        <input style="color:white;" id="username" style="width: 10%;" type="text" class="validate" name="username" value="<?php echo $username; ?>">
        <label for="username">Username</label>
    </div>
    <div class="input-field col s6">
        <input style="color:white;" id="email" style="width: 10%;" type="text" class="validate" name="email" value="<?php echo $email; ?>">
        <label for="email">E-Mail</label>
    </div>
    <div class="input-field col s6">
        <input style="color:white;" id="password_1" style="width: 10%;" type="password" class="validate" name="password_1">
        <label for="password_1">Password</label>
    </div>
    <div class="input-field col s6">
        <input style="color:white;" id="password_2" style="width: 10%;" type="password" class="validate" name="password_2">
        <label for="password_2">Confirm password</label>
    </div>
    <div>
        <br>
		<button type="submit" class="btn waves-effect waves" name="reg_user">Register</button>
    </div>
	<br>
	<p>
  		Already have an account?  <a href="login.php">Login now!</a>
  	</p>
    </center>
  </div>
  </body>
</html>