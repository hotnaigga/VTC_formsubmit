<?php
session_start();
include 'connexionpdo.php';



if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		echo "username cannot be empty";
		header("Location: ../html/login.php?error=User Name is required");
		exit();
	} else if (empty($pass)) {
		echo "password cannot be empty";
		header("Location: ../html/login.php?error=Password is required");
		exit();
	} else {
		// hashing the password
		// $pass = md5($pass);


		$sql = "SELECT * FROM `users` WHERE user_name = ? AND password = ?";
		$req = $conn->prepare($sql);
		$req->execute(array($uname, $pass));

		$result = $req->fetch(PDO::FETCH_OBJ);

		// var_dump($result);
		// exit;

		if ($result) {
			$_SESSION['user'] = $result;
			header("Location: ../html/home.php");
			exit();
		} else {
			header("Location: ../html/login.php?error=Incorect User name or password");
			exit();
		}
	}
} else {
	header("Location: ../html/login.php?error=please fill the required information");
	exit();
}
