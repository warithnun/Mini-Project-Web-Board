<?php 
require('server2.php');
$sql = "SELECT * FROM admin where admin_id=3 ";

$sum = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($sum);

echo $row["adminName"];
echo " ";
echo $row["adminlastname"];
echo "เกิดวันที่";
echo $row["birthday"];
?>