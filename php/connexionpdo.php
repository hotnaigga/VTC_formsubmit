<?php

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "test_db";

//Connect to mySQL server

try {
  $conn = new PDO("mysql:host=$sname;dbname=$db_name", $unmae, $password);
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
