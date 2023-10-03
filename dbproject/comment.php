<?php
session_start();
require('server.php');
date_default_timezone_set('Asia/Bangkok');
 $currentdatetime = $_POST['datetime'];
 $comment = $_POST["comment"];
 $customerID = $_SESSION['customerID'];
 $topicID = $_POST["topicID"];

 if($comment==""){
   $_SESSION["Message"]= 'comment_null';
   header('refresh:0; url=topic_detail.php?id='.$topicID);
 }
 else if(isset($_SESSION['customerID'])){
   $sql = "INSERT INTO comments(commentDetail,customerID,topicID,commentdatetime) VALUES('$comment','$customerID','$topicID','$currentdatetime')";
   $resalt = mysqli_query($conn,$sql);

   if($resalt){
      $_SESSION["Message"]= 'comment_success';
      header('refresh:0; url=topic_detail.php?id='.$topicID);
   } 
}else{
   $_SESSION["Message"]= 'comment_failed';
   header('refresh:0; url=login.php');
} 
  
?>