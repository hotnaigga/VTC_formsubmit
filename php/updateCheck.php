<?php
session_start();
include 'connexionpdo.php';
$uname = $_POST['uname'];
$password = $_POST['password'];
$name = $_POST['name'];
$id = $_POST['id'];
$sql = "UPDATE users SET user_name=:uname, password=:password, name=:name WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':uname', $user_name);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    header('Location:login.php');
} else {
    echo 'Error updating user.';
}
