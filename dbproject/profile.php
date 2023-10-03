<?php
require('server.php');
session_start();

$customerID = $_SESSION['customerID'];
$sql="SELECT * FROM customers WHERE customerID=$customerID ";
$rerult = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($rerult);

$username = $row['username'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$phone = $row['phone'];
$pass = $row['pass'];
 








?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>โปรไฟล์</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="index.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet"> <!-- font google -->
   <link rel="stylesheet" href="css/profile.css">




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

<?php require('offcanvas.php') ?>

   <!-- header --> 
<?php require('headerpage.php') ?>

   <div class="container mt-5 p-3 " style="background-image: radial-gradient(circle, #92ff8c, #bcfe95, #dbfca4, #f1fcb9, #fffdd1); border-radius: 20px; ">
      <form action="uploadimg.php" method="post" enctype="multipart/form-data" >
      <div class="row">

          <!-- form upload img -->
            <div class="col-5  p-5 ">

               
               <div class="d-flex align-content-center justify-content-center">
                  
                        <img style=" height: 20rem ; width: 20rem; ;border-radius: 50%; border:1px solid #161616 ;object-fit:cover " src="<?php echo $row['fileimg']; ?>" alt=""> 
                     
               </div>

               
               <div class="btn-position d-flex mt-3 justify-content-center align-content-center">
                  <div class="mb-3" style=" width: 70%; ">
                     <input class="form-control" type="file" id="formFileMultiple" name="fileupload" multiple >
                  </div>
                  <div>
                     <button class="btn btn-light ms-3 border border-dark-subtle" type="submit" >บันทึกรูป</button>
                  </div>
                  
               </div>
               
            </div>
         
         </form>

         <div class="col-7 ">
         <form action="profile_update.php" method="post">
               <div class="container mb-4">
               <div class="row my-3">
                     <div class="col">
                        <label class="py-1" for="">Username</label>
                        <input type="text" class="form-control" value="<?php echo $username  ?>" placeholder="ชื่อบัญชีผู้ใช้ " name="username">
                     </div>
                  </div>

                  <div class="row my-3">
                     <div class="col-6">
                        <div class="">
                           <label class="py-1" for="">Firstname</label>
                           <input type="text" class="form-control" value="<?php echo $firstname  ?>" placeholder="ชื่อจริง" name="firstname">
                        </div>
                     </div>
                     <div class="col">
                        <div class="">
                           <label class="py-1 " for="">Lastname</label>
                           <input type="text" class="form-control" value="<?php echo $lastname ?>" placeholder="นามสกุล" name="lastname">
                        </div>
                     </div>
                  </div>
                  <div class="row my-3">
                     <div class="col">
                        <div class="">
                           <label class="py-1" for="">Email</label>
                           <input type="text" class="form-control" value="<?php echo $email  ?>" placeholder="อีเมลล์" name="email">
                        </div>
                     </div>
                     <div class="col">
                        <div class="">
                           <label class="py-1" for="">Phone</label>
                           <input type="text" class="form-control" value="<?php echo $phone  ?>" placeholder="เบอร์ติดต่อ" name="phone">
                        </div>
                     </div>
                  </div>

                  
                  <div class="text-center  text-danger ">
                     ท่านต้องกรอกรหัสผ่านเพื่อที่จะแก้ไขข้อมูล
                  </div>
                  <div class="row my-3">
                     <div class="col-6">
                        <div class="">
                           <label class="py-1" for="">Password</label>
                           <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password">
                        </div>
                     </div>
                     
                  </div>
                  <input type="text" value="<?php echo$pass ?>" name="pass" class="d-none">
                  <div class="row my-3">
                     <div class="col-6">
                        <div class="">
                           <button class="btn btn-success form-control py-2" type="submit">ยืนยัน</button>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="">
                           <button class="btn btn-warning form-control py-2" type="reset">แก้ไข</button>
                        </div>
                     </div>
                  </div>
               </div>
         </form>
         </div>
      

      </div>

   


   </div>
   </div>
   




   


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      var session = <?php echo json_encode($_SESSION); ?>;
       if (session.Message == 'upload_success'){
            Swal.fire({
            icon: 'success',
            title: 'อัพเดตสำเร็จ',
            showConfirmButton: false,
            timer: 1500
         })
      }
      else if(session.Message == 'upload_failed') {
            Swal.fire({
            icon: 'error',
            title: 'อัพเดตล้มเหลว',
            text:'กรุณากรอกข้อมูลให้ถูกต้อง',
            showConfirmButton: false,
            timer: 1500
         })

      }
      <?php unset($_SESSION['Message']); ?>;
   </script>
</body>

</html>