<!DOCTYPE html>
<?php
$username = "";

if (isset($_SESSION["user"]) && isset($_SESSION["user"]["username"])) {
	$username = $_SESSION["user"]["username"];

}

?>
<html lang="en">
<h2>  <p>Welcome, <$php echo $username; ?> to Jate's Computer Hardware</p></h2>
</html>
