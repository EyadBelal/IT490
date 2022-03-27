#!/usr/bin/php
<?php
require_once('../rmq/path.inc');
require_once('../rmq/get_host_info.inc');
require_once('../rmq/rabbitMQLib.inc');

function requestProcessor($request)
{
	echo "Inserting info".PHP_EOL;
	$host = "localhost";
	$user = "root";
	$pass = "Jasprit01!";
	$db = "JATE";
	$conn = mysqli_connect($host, $user, $pass, $db);
	$username = $request['username'];
	$password = $request['password'];

	if (mysqli_connect_errno())
	{
		return "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		echo "Successfully connected to MySQL\nQuerying...\n";
		$query = "SELECT * FROM users WHERE username = '$username'";
		$loginUser = mysqli_query($conn, $query);
		$result = mysqli_num_rows($loginUser);

		if ($result == 0)
		{
			echo mysqli_error($conn) . "\n not found\n";
			return array('msg'=>"Wrong Credentials");
		}
		else
		{
			$row = mysqli_fetch_array($loginUser);
			$hash = $row['password'];
			if (password_verify($password, $hash))
			{
				echo "Authorization Confirmed\n";
				return array('msg'=>'Authorization Confirmed');
			}
		}
	}
	echo "failed";
	return array('msg'=>'Wrong Credentials. Please retry');
}
$server = new rabbitMQServer("../rmq/loginToDB.ini","testServer");
echo "Waiting for connection" . PHP_EOL;
$server->process_requests('requestProcessor');
exit();
?>

