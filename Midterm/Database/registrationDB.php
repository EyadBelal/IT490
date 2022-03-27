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
	$firstname = $request['firstname'];
	$lastname = $request['lastname'];
	$username = $request['username'];
	$password = $request['password'];

	if (mysqli_connect_errno())
	{
		return "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		echo "Successfully connected to MySQL\nQuerying...\n";
		$query = "INSERT INTO users(firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$password')";
		$createUser = mysqli_query($conn, $query);
		if ($createUser)
		{
			echo "Account Created\n";
			return 'created';
		}
		else
		{
			echo mysqli_error($conn) . "\n not created\n";
			return 'notCreated';
		}
	}
	echo "failed";
	return 'notCreated';
}

$server = new rabbitMQServer("../rmq/registerToDB.ini","testServer");
echo "Waiting for connection" . PHP_EOL;
$server->process_requests('requestProcessor');
exit();
?>

