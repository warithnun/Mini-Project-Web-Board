<?php 

session_start();
require('server.php');
echo $commentID =  $_POST['commentID'];
echo $topicid  = $_POST['topicID'];


 $sql2 = "DELETE FROM comments WHERE commentID = $commentID;";
$result2 = mysqli_query($conn,$sql2);

if($result2){
   $_SESSION["Message"]='delete_success';
   header('refresh:0; url=topic_detail.php?id='.$topicid);
}else{
   
   $_SESSION["Message"]='failed';
   header('refresh:0; url=topic_detail.php?id='.$topicid);
}    
?>