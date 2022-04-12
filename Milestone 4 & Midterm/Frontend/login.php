<!DOCTYPE html>
<?php
require_once('log.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="Style.css">
	 <!-- Paste CSS Link -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                
                <nav class="navbar navbar-inverse">
   	<div class="container-fluid">
    	<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	<a class="navbar-brand" href="main.php">JATE</a>
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
	<p class="projectlogo" style="font-size: 40px;"> <span style="font-size: 35px;"></span>Welcome to JATE</p>

    <div class="form-horizontal">
        <h1>Sign in</h1>
        <form method="post">
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

<!--require_once('../RabbitMq/path.inc');
require_once('../RabbitMq/get_host_info.inc');
require_once('../RabbitMq/rabbitMQLib.inc');

$client = new rabbitMQClient("../RabbitMq/login.ini", "testServer");
if (isset($_SESSION['username']))
{
	echo "<meta http-equiv='refresh' content='2;URL=main.php'>";
}

if (isset($_POST['username']) and isset($_POST['password'])){
	echo "<h3> " . $_POST['username'] . $_POST['password'] . " </h3>";
	$request = array('username'=>$_POST['username'], 'password'=>$_POST['password'], 'type'=>'login');
	echo "<h3>Writing message to exchange</h3>";
	$response = $client->send_request($request);
	echo "<h3>Sending response to servers</h3>";
	switch ($response['msg'])
	{
		case 'Wrong Credentials':
			echo $response['msg'];
			echo "<meta http-equiv='refresh' content='2;URL=login.php'>";
			exit();
		case 'Authorization Confirmed':
			$_SESSION['isVerified'] = true;
			echo "<h3>Starting session and confirming validation</h3>";
			$_SESSION['username'] = $_POST['username'];
			echo "<h3>Storing username in session</h3>";
			unset($_POST);
			echo "<h3>Clearing POST variable</h3>";
			echo "<meta http-equiv='refresh' content='2;URL=main.php'>";
			exit();
	}
}
?>-->

</html>


