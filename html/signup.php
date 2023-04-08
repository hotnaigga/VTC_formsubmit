<!DOCTYPE html>
<html>

<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
     <form action="../php/signupCheck.php" method="POST">
          <h2>SIGN UP</h2>

          <label>Name</label>

          <input type="text" name="name" placeholder="Name">
          <br>



          <label>User Name</label>

          <input type="text" name="uname" placeholder="User Name"><br>



          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" name="re_password" placeholder="Re_Password"><br>

          <button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
          <a href="update.php" class="ca">Do you Want to update your info?</a>
     </form>
</body>

</html>