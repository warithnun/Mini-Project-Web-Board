<?php
session_start();
require('server.php');
date_default_timezone_set('Asia/Bangkok');
$datetime =  $topicdatetime = date('d-m-Y H:i');

$topicID =  $_GET["id"];

$sql = "SELECT customers.firstname,topicID,topicDetail,topicName,topicdatetime FROM topics INNER JOIN customers ON topics.customerID = customers.customerID WHERE topicID = $topicID";
$resalt = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($resalt);


$sqlcomment = "SELECT customers.firstname,commentID,commentDetail,comments.customerID,comments.topicID,commentdatetime,fileimg FROM comments INNER JOIN customers ON comments.customerID = customers.customerID WHERE topicID = $topicID";
$resalts = mysqli_query($conn,$sqlcomment);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>กระทู้1</title>
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
   
   background-color: #e5e5e5;
  }
</style>

<body > 


<!-- แปะทุกหน้า -->
<?php require('offcanvas.php') ?>
   <!-- header --> 
   <?php require('headerpage.php') ?>
           




<div class="container my-5 px-5 py-5 text-bg-dark " id="content" style="border-radius: 15px;" >

         <div class="text-center mt-4">
            <H1><?php echo $row["topicName"]; ?></H1>
            <p style=" text-align:right; "> <?php echo "ประกาศโดย :".$row["firstname"] ?>  </p>
                  
         </div>
         <hr>
         
      <div class="container " style="font-size: 18px; text-indent: 35px;" >
                  
               <p><?php echo $row["topicDetail"]; ?></p>
      </div>

      
              <hr>
      
         <div class="container p-3" style=" border: 1px solid #e5e5e5;overflow: auto; border-radius: 15px;   ">
         <div class="form-floating " >
            <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" >
            <label for="" >ส่วนของComment</label>
         </div>
          

            <?php while($row2 = mysqli_fetch_assoc($resalts)){?>
              
               
               
            <div class="" >
                  <div class="row">
                     <div class="col-6">
                        <div class="d-flex mx-2">
                           <h5 class="accordion-header " >
                           <img src="<?php echo $row2['fileimg'] ?>" alt="" style=" height: 50px; width: 50px; border-radius: 50%; margin-right: 5px;">
                                    
                                       <?php echo$row2['firstname']?>
            
                           </h5>
                        </div>
                        
                     </div>
                     
                     <?php

                      
                       if(isset($_SESSION['customerID'])&&$row2['customerID']==$_SESSION['customerID']) {
                        
                        
                        echo " <div class='col-6  d-flex justify-content-end '>
                        <div class='dropdown ' >
                           <button class='btn dropdown-toggle bg-secondary form-control' type='button' data-bs-toggle='dropdown' aria-expanded='false'  >                 
                        </button>
                        
                        <ul class='dropdown-menu'>
                        <button class='btn btn-light form-control' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' onclick='deleteID(".$row2['commentID'].")' >ลบ</button>

                        <button type='button' class='btn btn-light form-control' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='update(".$row2['commentID'].",\"" .$row2['commentDetail']. "\")'  data-bs-whatever='@getbootstrap'>แก้ไข</button>
                             
                        </ul> 
                        </div>   
                     </div> ";
                      }else{
                        echo " ";
                      }
                     ?>

                  </div>

                  <p>แสดงความคิดเห็น วันที่ <?php echo$row2['commentdatetime']?>  </p> 
               <div class="alert alert-light bg-secondary text-light"  role="alert" >
                  <?php echo $row2['commentDetail'] ?>
               </div>
            </div>

         
                      
            <?php }?>

         </div> 
<!-- modal delete -->

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <form action="delete_comment.php" method="post">
         <div class="mb-3">
         <input type='text' class='d-none' name='commentID' id='commentID'>
         <input type='text' class='d-none' name='topicID' value='<?php echo $topicID ?>'>
         <label   for="" class="col-form-label text-dark">ยืนยันว่าจะลบจริงๆนะ</label>      
         </div> 
         <div class="modal-footer">
         
      <button type="reset" class="btn btn-secondary" name="submit" data-bs-dismiss="modal">ยกเลิก</button>
      <button type="submit" class="btn btn-danger">ลบ</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- modal update -->        
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               
               <div class="modal-body">
               <form action="update_comment2.php" method="post">
               <label for="" class="text-primary">ข้อความที่ต้องการแก้ไข</label>
                  <div class="mb-3">
                  
                  <input type='text' class='d-none' name='commentID' id="commentID2" value='<?php /* echo $commentid */ ?>'>
                  <input type='text' class='d-none' name='topicID' value='<?php echo $topicID ?>'>
                  <input type="text" class="form-control" name="commentnew"  id="detail" value="" >

                  <label for="message-text" class="col-form-label">Comment</label>
                  
                  </div> 
                  <div class="modal-footer">
               <button type="reset" class="btn btn-secondary" name="submit" data-bs-dismiss="modal">ยกเลิก</button>
               <button type="submit" class="btn btn-primary">แก้ไข</button>
               </div>
               </form>
               </div>
            
            </div>
         </div>
         </div> 
         <!-- แก้ไข -->
   
    </div>

    <div>

    </div>
   
    
    <div class="container pb-3 mb-5 bg-light" style=" border-radius: 15px; ">
      <form action="comment.php" method="post" class="mt-5">
      <div class="form-floating">
        <textarea class="form-control " placeholder="Leave a comment here"  name="comment" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Comments</label>
        
      </div>
      <input  type="text" name="topicID" class="d-none" value="<?php echo $topicID; ?>">
      <input  type="text" name="datetime" class="d-none" value="<?php echo $datetime ?>">
      <div class="d-flex align-content-end justify-content-end mt-3">
        <button class="btn btn-secondary " type="submit">comment</button>
      </div>
      </form>
    </div>
   
  


  

  <?php require('footerpage.php'); ?>


    

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script>
      
      var session = <?php echo json_encode($_SESSION); ?>;
      function deleteID(id){
         $('#commentID').val(id)
      }
      function update(id,detail){
         $('#commentID2').val(id);
         $('#detail').val(detail);
      }
     
      if(session.Message == 'comment_success'){
          Swal.fire({
            icon: 'success',
            title: 'แสดงความคิดเห็นแล้ว!!!!',
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
      }else if(session.Message== 'updatefailed'){
         Swal.fire({
            icon: 'error',
            title: 'updatefailed',
            showConfirmButton: false,
            timer: 1500
         })
      }
      else if(session.Message == 'updatesuccess'){
         Swal.fire({
            icon: 'success',
            title: 'แก้ไขสำเร็จ',
            showConfirmButton: false,
            timer: 1500
            
         })
         
      }else if(session.Message == 'delete_success'){
         Swal.fire({
            icon: 'success',
            title: 'ลบสำเร็จ',
            showConfirmButton: false,
            timer: 1500
            
         })
      }
      else if(session.Message == 'failed'){
         Swal.fire({
            icon: 'error',
            title: 'มีข้อผิดพลาด',
            showConfirmButton: false,
            timer: 1500
            
         })
      }else if(session.Message == 'comment_null'){
         Swal.fire({
            icon: 'warning',
            title: 'กรุณากรอกข้อความ',
            showConfirmButton: false,
            timer: 1500
            
         })
      }
      <?php unset($_SESSION['Message']); ?>
      
    </script>
  </body>
</html>