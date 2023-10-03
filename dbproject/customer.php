<?php
 // เรียกไฟล์ที่ชื่อว่า server.php มาใช้ในหน้านี้ 
require('server2.php'); //
$sql = " SELECT * FROM customers "; //คำสั่งเลือกทั้งหมดของตาราง ลูกค้า
$sum = mysqli_query($conn,$sql); // อ่าน $sql 

/*  while($row = mysqli_fetch_assoc($sum)){

echo "  ชื่อ  ".$row["name"];
echo "   วันเกิด ".$row["birthday"];
echo "<br>";  



}  */


?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<style>
    #navregister:hover{
    color: #161616;
    
  }
  #navlogin:hover{
    color: rgb(14, 14, 14);
  }
</style>
<body>

      <h1>ข้อมูลลูกค้า</h1>
      
      
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ลำดับ</th>
               <th scope="col">ชื่อ</th>
               <th scope="col">นามสกุล</th>
               <th scope="col">วันเกิด</th>
            </tr>
         </thead>
         <tbody>

         <?php  while($row = mysqli_fetch_assoc($sum)) {?> 
               <tr>

               <th><?php echo $row["customerID"]; ?></th>
               <td> <?php echo $row["name"] ?>  </td>
               <td> <?php echo $row["lastName"] ?> </td>
               <td> <?php echo $row["birthday"] ?> </td>

               </tr>

         <?php } ?> 
    
         </tbody>
         </table>
     
                   
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>