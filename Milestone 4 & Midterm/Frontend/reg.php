<?php
require_once('../RabbitMq/path.inc');
require_once('../RabbitMq/get_host_info.inc');
require_once('../RabbitMq/rabbitMQLib.inc');

$client = new rabbitMQClient("../RabbitMq/register.ini", "testServer");
//echo $_POST['firstname'];// . $_POST['lastname'] . $_POST['username'] . $_POST['password'];
if (isset($_POST['firstname'])
        and isset($_POST['lastname'])
        and isset($_POST['username'])
        and isset($_POST['password']))
{
                #echo $_POST['firstname'] . $_POST['lastname'] . $_POST['username'] . $_POST['password'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	echo "<h3>Redirecting...</h3>";
                $request = array(
                        'firstname'=>$_POST['firstname'],
                        'lastname'=>$_POST['lastname'],
                        'username'=>$_POST['username'],
                        'password'=>$password,
                        'type'=>'register');
    
                $response = $client->send_request($request);
        switch ($response)
        {
                case 'created':
                        echo 'Successfully created';
                        echo "<meta http-equiv='refresh' content='3;URL=login.php'>";
                        exit();
                case 'notCreated':
                        echo 'Username already taken. Please re-enter different username in 3 seconds';
                        echo "<meta http-equiv='refresh' content='3;URL=registration.php'>";
                        exit();
        }
}
?>

