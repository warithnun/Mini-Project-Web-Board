<?php 
session_start();
require('server.php');

$directory ="customer_img/";
$namepath = $directory. basename($_FILES['fileupload']['name']);

$id = $_SESSION["customerID"];

if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $namepath)){
   $sql = "UPDATE customers
   SET fileimg = '$namepath'
   WHERE customerID = $id";
   $resutl = mysqli_query($conn,$sql);
   if($resutl){
      $_SESSION["Message"] = 'upload_success';
      header('refresh:0; url=profile.php');
   }
   else{
      $_SESSION["Message"] = 'upload_failed';
      header('refresh:0; url=profile.php');
   }
}
else{
   $_SESSION["Message"] = 'upload_failed';
   header('refresh:0; url=profile.php');
}


?>