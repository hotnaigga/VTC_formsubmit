<!DOCTYPE html>
<html>

<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
     <form action="../php/update.php" method="POST">
          <h2>UPDATE INFO</h2>

          <label>Name</label>

          <input type="text" name="name" placeholder="Name">
          <br>



          <label>User Name</label>

          <input type="text" name="uname" placeholder="User Name"><br>



          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>

          <label>Enter ID</label>
          <input type="number" name="id" placeholder="Enter ID"><br>

          <!-- <label>Confirm Password</label>
          <input type="password" name="re_password" placeholder="Re_Password"><br>-->

          <button type="submit">Commit Change</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</body>

</html>