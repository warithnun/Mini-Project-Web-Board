<?php
require('server.php');

session_start();
$user =$_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM customers where username ='$user' AND pass='$pass'";
$resalt = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($resalt);

if(mysqli_num_rows($resalt)==1){
   $_SESSION["user"] = $row["username"];
   $_SESSION["pass"] = $row["pass"];
   $_SESSION["customerID"] = $row["customerID"];
   $_SESSION["firstname"] = $row["firstname"];
   $_SESSION["lastname"] = $row["lastname"];
   $_SESSION['fileimg'] =$row['fileimg'];
   if($_SESSION["user"]==$user&&$_SESSION["pass"]==$pass){
      $_SESSION["is_login"] = true;
      
      $_SESSION["Message"]='login_success';
      header('refresh:0; url=index.php');
      
   }else{
      $_SESSION["Message"]='login_failed';
      header('refresh:0; url=login.php');
      
   }
}
else{
   $_SESSION["Message"]='login_failed';
   header('refresh:0; url=login.php');
   
}

/* $row = mysqli_fetch_assoc($resalt) */

?>

