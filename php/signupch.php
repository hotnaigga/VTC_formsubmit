<?php
include_once 'connexionpo.php';


if (isset($_POST)) {
    try {
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $name = $_POST['name'];

        $sql = "INSERT INTO `users` (`user_name`, `password`, `name`) VALUES (?, ?, ?);";
        $req = $conn->prepare($sql);
        $req->execute(array($uname, $password, $name));
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
    header("Location: ../html/login.php");
}
