<?php 

session_start();
session_destroy();
echo"<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>";
echo "<div class='alert alert-success' role='alert'> ออกจากระบบแล้ว </div>";
echo "<script> setTimeout(function(){
   window.location.href= 'index.php';
 },1500); </script>";
?>