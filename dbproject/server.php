<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$database = "db_project";
$conn = mysqli_connect($servername,$username,$pass,$database);

if(!$conn){
   echo "Connection failed:".mysqli_connect_error() ;
}else{
   
}



?>