<?php 
require('server.php');
session_start();
date_default_timezone_set('Asia/Bangkok');
$datetime =  $topicdatetime = date('d-m-Y H:i');
$customerID = $_SESSION["customerID"];
$topicName = $_POST["topicName"];
$topicDetail =  $_POST["topicDetail"];

if($topicName==""&&$topicDetail==""){
   $_SESSION["Message"] = 'topic_null';
   header('refresh:0; url=topic.php');
}else{
$sql = "INSERT INTO topics(topicName,customerID,topicDetail,topicdatetime) VALUES('$topicName','$customerID','$topicDetail','$datetime')";
$resalt = mysqli_query($conn,$sql);
if($resalt){
   $_SESSION["Message"] = 'insert_success';
   header('refresh:0; url=topic.php');
}else{
   $_SESSION["Message"] = 'insert_failed';
   header('refresh:0; url=topic.php');
}
}
?>