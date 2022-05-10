<?php
require_once('../RabbitMq/path.inc');
require_once('../RabbitMq/get_host_info.inc');
require_once('../RabbitMq/rabbitMQLib.inc');

$client = new rabbitMQClient("../RabbitMq/login.ini", "testServer");
if (isset($_SESSION['username']))
{
        echo "<meta http-equiv='refresh' content='2;URL=main.php'>";
}

if (isset($_POST['username']) and isset($_POST['password'])){
       # echo "<h3> " . $_POST['username'] . $_POST['password'] . " </h3>";
        $request = array('username'=>$_POST['username'], 'password'=>$_POST['password'], 'type'=>'login');
        echo "<h3>Redirecting...</h3>";
        $response = $client->send_request($request);
        switch ($response['msg'])
{
                case 'Wrong Credentials':
                        echo $response['msg'];
                        echo "<meta http-equiv='refresh' content='2;URL=login.php'>";
                        exit();
                case 'Authorization Confirmed':
                        $_SESSION['isVerified'] = true;
                        $_SESSION['username'] = $_POST['username'];
                        unset($_POST);
                        echo "<meta http-equiv='refresh' content='2;URL=main.php'>";
                        exit();
        }
}
?>

