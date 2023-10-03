<?php
session_start();
require('server.php');
date_default_timezone_set('Asia/Bangkok');

$sql = "SELECT topicID,topicDetail,topicdatetime,customerID,topicName FROM topics ORDER BY topicID DESC";

$resalt = mysqli_query($conn,$sql);




?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>กระทู้</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="index.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet"> <!-- font google -->
  </head>
  <style>
    #navregister:hover{
    color: #161616;
    
  }
  #navlogin:hover{
    color: rgb(14, 14, 14);
  }
  body{
   
   background-color:#212529;
   color: white;
 }
</style>

<body > 
<?php require('headerpage.php') ?>

<!-- แปะทุกหน้า -->
<?php require('offcanvas.php') ?>

   <!-- header --> 

           
<!-- แปะทุกหน้า -->

<!-- กรอกกรอกข้อมูล -->

   <H1 class="text-center mt-5">กระทู้</H1>       
      </div>
      <hr>
      <div class="">
         <!-- <p class="">“ กระดานพูดคุยข่าวสาร ”
         </p> -->
         <div class="  text-center" >
         <h2>“ กระดานพูดคุยข่าวสาร ”</h2>
         </div>
      </div>

   <div class="container my-5 pe-1 ps-5 py-5 bg-dark " id="content" style="   box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;border-radius: 15px "  >    
      <div class="row">
         <?php while($row = mysqli_fetch_assoc($resalt)) { ?> 
            <div class="col col-lg-4 col-md-6 col-sm-12 my-3 ">
            
               <div class="card " style="width: 18rem; ">
                  
                  <a href="topic_detail.php?id=<?php echo $id = $row["topicID"]; ?>" type="submit" style="min-height: 197px;" class="btn btn-outline-dark ">
                  <h5 class="card-title mt-2"><?php echo$row["topicName"];  ?></h5>
                  <hr>
                  <div class="card-body" >
                     <p class="card-text" ><?php
                     $str = $row["topicDetail"];
                     $str2 = mb_substr($str,0,100, 'utf-8');   
                     echo $str2."...";
                     ?></p>
                     <p class="card-text">สร้างเมื่อ<?php echo $row['topicdatetime'] ?></p>
                  </div>
                  </a>    
               </div>
            
         </div><?php } ?>
      </div>
      
   </div>
       
  


      <div class="container mt-5 pt-5 pb-3 border border-secondary-subtle text-dark"  style=" border-radius: 15px 15px 0 0; background-image: linear-gradient(to top, #efe8da, #f3ecd5, #f5f1d0, #f4f6cc, #f0fcc9);">
         <h1>ตั้งกระทู้</h1>   
      </div>
      <div class="container  pt-3 pb-5  mb-5 border border-top-0 text-dark" style=" border-radius: 0 0 15px 15px ; background-image: linear-gradient(to bottom, #efe8da, #f3ecd5, #f5f1d0, #f4f6cc, #f0fcc9);"> 
            <form action="topic_insert.php" method="post">
               <h3 class="ms-2">หัวข้อกระทู้</h3>
               <input class="form-control text-dark" type="text" name="topicName" placeholder="หัวข้อ">
               <label for="topicDetail" class="mt-4 ms-2"> เนื้อหากระทู้ </label>
               <textarea class="form-control mt-1" name="topicDetail" id="" cols="30" rows="10" placeholder="เนื้อหา"></textarea>
               <div class="d-flex align-content-end justify-content-end mt-3">
                  <button class="btn btn-primary " type="submit" >ตั้งกระทู้</button>
               </div>
              
            </form>
      </div>


   
   
   
      <?php require('footerpage.php'); ?>
   

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      var session = <?php echo json_encode($_SESSION); ?>;
      if(session.Message == 'insert_success'){
          Swal.fire({
            icon: 'success',
            title: 'ตั้งกระทู้สำเร็จ',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message=='insert_failed'){
         Swal.fire({
            icon: 'error',
            title: 'คุณต้องเข้าสู่ระบบก่อน',
            showConfirmButton: false,
            timer: 1500
         })
      }
      else if(session.Message=='comment_success'){
        Swal.fire({
            icon: 'info',
            title: 'แสดงความคิดเห็นแล้ว',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'comment_failed'){
        Swal.fire({
            icon: 'warning',
            title: 'กรุณาเข้าสู่ระบบก่อน',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'logout'){
        Swal.fire({
            icon: 'success',
            title: 'คุณได้ออกจากระบบแล้ว',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'comment_updatesuccess'){
         Swal.fire({
            icon: 'success',
            title: 'แก้ไขสำเร็จ',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message=='topic_null'){
         Swal.fire({
            icon: 'warning',
            title: 'กรุณากรอกข้อมูล',
            showConfirmButton: false,
            timer: 1500
         })
      }
      <?php unset($_SESSION['Message']); ?>;
      
    </script>
  </body>
</html>