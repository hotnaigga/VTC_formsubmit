<?php session_start() ?>
<?php
if (!isset($_SESSION["user"])) {
     header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../css/login.css">
     <title>Document</title>

</head>

<body>

</body>

</html>



<!DOCTYPE html>
<html>

<head>
     <title>HOME</title>
     <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
     <h1>Hello <?php
               //include '../php/loginform.php'; 
               echo $_SESSION['user']->name; ?></h1>


     <form method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          <br>
          <label for="comment">Comment:</label>
          <textarea id="comment" name="comment"></textarea>
          <br>
          <input type="submit" name="submit" value="Submit">
          <a href="logout.php" class="ca">Logout</a>
          <a href="update.php" class="ca">Update Info</a>
     </form>

</body>

</html>