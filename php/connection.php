<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

//Connect to mySQL server

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	die ("Connection failed:" .
  mysqli_connect_error());
}

echo "connected successfully";

?>
