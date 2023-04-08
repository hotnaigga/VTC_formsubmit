<?php
session_start();
if (isset($_SESSION["user"]) and !empty($_SESSION["user"])) {
	header("Location: home.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
	<form action="../php/loginform.php" method="POST">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
		<a href="signup.php" class="ca">Create an Account</a>
	</form>
</body>

</html>