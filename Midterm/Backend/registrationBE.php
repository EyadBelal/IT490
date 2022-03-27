#!/usr/bin/php
<?php
require_once('../rmq/path.inc');
require_once('../rmq/get_host_info.inc');
require_once('../rmq/rabbitMQLib.inc');

function queryDatabase($request)
{
	echo "Connecting to Database\n";
	$client = new rabbitMQClient("../rmq/registerToDB.ini", "testServer");
	$validate = $request;
	echo "Waiting for database to respond\n";
	$response = $client->send_request($validate);
	echo "Registered Successfully\n" . var_dump($response);
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
		case "register":
			return queryDatabase($request);
	}
	echo "Failed";
	return "couldn't get message";
}

$server = new rabbitMQServer("../rmq/register.ini","testServer");
echo "Waiting for connection" . PHP_EOL;
$server->process_requests('requestProcessor');
exit();
?>

