<?php
require('server.php');
session_start();
$id = $_SESSION['customerID'];
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$pass_check = $_POST['password'];

if ($pass == $pass_check) {
    echo "รหัสผ่านตรง";
    $sql = "UPDATE customers SET username='$username', firstname='$firstname' , lastname='$lastname' , email='$email', phone ='$phone' WHERE customerID =$id";
    $rerult = mysqli_query($conn, $sql);
    if ($rerult) {
      $_SESSION["Message"] = 'upload_success';
      header('refresh:0; url=profile.php');
    } else {
        $_SESSION["Message"] = 'upload_failed';
        header('refresh:0; url=profile.php');
    }

} else {
    $_SESSION["Message"] = 'upload_failed';
    header('refresh:0; url=profile.php');
}



?>