<?php 


session_start();
require('server.php');
 $commentID =  $_POST['commentID'];
 $topicid  = $_POST['topicID'];
$commentnew = $_POST['commentnew'];

$sql2 = "UPDATE comments SET commentDetail='$commentnew' WHERE commentID = '$commentID' ";
$result2 = mysqli_query($conn,$sql2);

if($result2){
   $_SESSION["Message"]='updatesuccess';
   header('refresh:0; url=topic_detail.php?id='.$topicid);
}else{
   
   $_SESSION["Message"]='updatefailed';
   header('refresh:0; url=topic_detail.php?id='.$topicid);
} 
   
?>