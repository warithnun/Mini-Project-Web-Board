<?php
session_start();
require('server.php');

$username = $_POST["username"];
$password = $_POST["password"];
$pass_conf = $_POST["pass-con"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$filename = './img/usericon.png';
$Duplicate = 0;

$select = "SELECT * FROM customers";
$sum = mysqli_query($conn,$select);
$row2 = mysqli_fetch_assoc($sum);

while($row = mysqli_fetch_assoc($sum)){
  
   if($row['username']==$username){
      $Duplicate++;
   }
   
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // ตรวจสอบว่าข้อมูลที่จำเป็นถูกกรอกหรือไม่
   if (empty($_POST["username"]) || empty($_POST["password"])) {
      $_SESSION["Message"] = 'insert_failed';
      header('refresh:0; url=register.php');
   }else if($Duplicate>=1){
      $_SESSION["Message"] = 'Duplicate';
      header('refresh:0; url=register.php');   
   } else if($password!=$pass_conf){
   $_SESSION["Message"] = 'confrimfailed';
   header('refresh:0; url=register.php');
   }else if($Duplicate==0){
      $sql = "INSERT INTO customers(username,pass,firstname,lastname,email,phone,fileimg) VALUES('$username','$password','$firstname','$lastname','$email','$phone','$filename')";

      $resalt = mysqli_query($conn,$sql);

      if($resalt){
         $_SESSION["Message"] = 'insert_success';
         header('refresh:0; url=register.php');
      }else{
         echo"<script>alert('ไม่สำเร็จ!!')</script>";
         header('refresh:0; url=register.php');
      }
   } 
}






?>