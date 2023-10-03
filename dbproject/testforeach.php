<?php
date_default_timezone_set('Asia/Bangkok');
$time = date('Y-m-d H:i:s');
require('server.php');
$sql ="SELECT  customers.firstname ,commentID,commentDetail,commentDate FROM comments INNER JOIN customers ON comments.customerID = customers.customerID ";
$resalt = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
    while($row = mysqli_fetch_assoc($resalt)){
      echo"ชื่อผู้เขียน";
         echo $row['firstname'];
         echo"  ";
         echo $row['commentDetail'];
         echo" วันที่";
         echo $row['commentDate'];
         echo $time;
         echo"<br>";
         
    }
    ?>
</body>
</html>