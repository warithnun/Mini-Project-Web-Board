<?php 
session_start();
require('server.php');
$topicID = $_POST['topicID'];
$sql = "DELETE FROM comments WHERE topicID = $topicID";
$resalt = mysqli_query($conn,$sql);

$sql2 ="DELETE FROM topics WHERE topicID = $topicID";
$resalt2 = mysqli_query($conn,$sql2);

if($resalt){
   if($resalt2){
      $_SESSION["Message"]='delete_success';
      header('refresh:0; url=mytopic.php');
   }
   
}else{
   echo "error";
}
               
?>