<!doctype html>
<?php
require_once('reg.php');
?>
<html lang="en" >

	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="Style.css">

                <!-- Required CSS Link -->
               <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
		
		<nav class="navbar navbar-inverse">
 	 <div class="container-fluid">
	<div class="navbar-header">
   <!-- <a class="navbar-brand" href="main.php">Jate</a>-->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
   <!-- <a class="navbar-brand" href="home.php">JATE</a>-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
        </head>
        <body>
<!-- Required JavaScript Link -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
       <p class="projectlogo" style="font-size: 40px;"> <span style="font-size: 35px;"></span>Welcome to JATE</p>   
		<div class="form-horizontal">
        <h1>Sign Up</h1>
        <form method="post">
            <div class="textField">
                <input type="text" name="firstname" required>
		<label for="firstname">First Name</label>
	</div>
        	<div class="textField">
                <input type="text" name="lastname" required>
		<label for="lastname">Last Name</label>
	</div>
            <div class="textField">
                <input type="text" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="textField">
		<input type="password" name="password" required>
                <label for="password">Password</label>
	    </div>

            <input type="submit" value="Submit">
        </form>
    </div>


	</body>
</html>
