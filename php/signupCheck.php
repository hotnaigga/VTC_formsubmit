<?php
session_start();
include_once 'connexionpdo.php';

if (isset($_POST['submit'])) {
	try {
		$d = $_POST['uname'];
		$e = $_POST['password'];
		$f = $_POST['name'];
		$insert1 = "INSERT INTO users(user_name,password,name) values ('$d','$e','$f')";

		$run1 = mysqli_query($conn, $insert1);
	} catch (Exception $e) {
		echo $e->getMessage();
		exit;
	}
}


if (
	isset($_POST['uname']) && isset($_POST['password'])
	&& isset($_POST['name']) && isset($_POST['re_password'])
) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;             
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname=' . $uname . '&name=' . $name;


	if (empty($uname)) {
		header("Location: signupCheck.php?error=User Name is required & $user_data");
		exit();
	} else if (empty($pass)) {
		header("Location: signupCheck.php?error=Password is required&$user_data");
		exit();
	} else if (empty($re_pass)) {
		header("Location: signupCheck.php?error=Re Password is required&$user_data");
		exit();
	} else if (empty($name)) {
		header("Location: signupCheck.php?error=Name is required & $user_data");
		exit();
	} else if ($pass !== $re_pass) {
		header("Location: signupCheck.php?error=The confirmation password  does not match&$user_data");
		exit();
	} else {

		// hashing the password


		$sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../html/signup.php?error=The username is taken try another&$user_data");
			exit();
		} else {
			$sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
				header("Location: ../html/signup.php?success=Your account has been created successfully");
				exit();
			} else {
				header("Location: ../html/signup.php?error=unknown error occurred&$user_data");
				exit();
			}
		}
	}
} else {
	header("Location: ../html/home.php");
	exit();
}

if (isset($_GET['$id'])) {
	$qry = $conn->query("UPDATE user SET uname='$uname', password='$password' WHERE id===id");
	echo $qry;
}
..


k7jhl!HL2#1dxjj%Kb8r