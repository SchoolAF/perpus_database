<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Arcadia Library - Login</title>
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
    <form action="" method="post">
    <center>
    <div class="input-field col s6">
        <input style="color:white;" id="username" style="width: 10%;" type="text" class="validate" name="username">
        <label for="username">Username</label>
    </div>
    <div class="input-field col s6">
        <input style="color:white;" id="password" style="width: 10%;" type="password" class="validate" name="password">
        <label for="password">Password</label>
    </div>
    <div>
        <br>
		<button type="submit" class="btn waves-effect waves" name="login_user">Login</button>
    </div>
    <br>
    <p>
  		Don't have an account yet?  <a href="register.php">Register now!</a>
  	</p>
    </center>
  </div>
  </body>
</html>
