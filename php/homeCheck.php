<?php 
session_start();
include 'connection.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


}else{
     header("Location: index.php");
     exit();
}
 ?>
 <?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Check if old password is correct
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();
    if (password_verify($old_password, $hashed_password)) {
        // Old password is correct, update password
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
        $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt->bind_param("ss", $hashed_new_password, $username);
        $stmt->execute();
        echo "Password changed successfully";
    } else {
        // Old password is incorrect
        echo "Old password is incorrect";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>



<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $comment);

    // Execute
    $stmt->execute();

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

