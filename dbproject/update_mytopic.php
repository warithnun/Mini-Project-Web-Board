<?php 
session_start();
require('server.php');
$topicID = $_POST['topicID'];
$id = $_SESSION['customerID'];
$topicname = $_POST['topicName'];
$detail = $_POST['detail'];

$sql = "UPDATE topics SET topicName ='$topicname' ,topicDetail = '$detail' WHERE topicID = '$topicID' ";
$resalt = mysqli_query($conn,$sql);



if($resalt){
      $_SESSION["Message"]='update_success';
      header('refresh:0; url=updatemytopic.php');
   
   
}else{
   echo "error";
}
     
?>