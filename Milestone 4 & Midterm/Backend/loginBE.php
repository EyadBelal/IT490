#!/usr/bin/php
<?php
require_once('../RabbitMq/path.inc');
require_once('../RabbitMq/get_host_info.inc');
require_once('../RabbitMq/rabbitMQLib.inc');

function queryDatabase($request)
{
	echo "Connecting to Database\n";
	$client = new rabbitMQClient("../RabbitMq/loginToDB.ini", "testServer");
	$validate = $request;
	echo "Turn on Database\n";
	$response = $client->send_request($validate);
	echo "Login Successfully\n" . var_dump($response);
	return $response;
}

function requestProcessor($request)
{
  echo "Connected".PHP_EOL;
  var_dump($request);
  if(!isset($request['username']))
  {
    return "ERROR: No username provided";
  }
  switch ($request['type'])
  {
		case "login":
			return queryDatabase($request);
	}
	echo "Failed";
	return "couldn't get message";
}

$server = new rabbitMQServer("../RabbitMq/login.ini","testServer");
echo "Waiting for connection" . PHP_EOL;
$server->process_requests('requestProcessor');
exit();
?>

