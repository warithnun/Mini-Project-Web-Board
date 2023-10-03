<?php
session_start();
if(isset($_SESSION['is_login'])){
   header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>ล็อกอิน</title>
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
</style>
<body >   

<div class="offcanvas offcanvas-end text-center" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style=" background-color: #e5e5e5 ; width:20rem ">
      <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasRightLabel">หน้าสำหรับแก้ไขข้อมูล</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ms-3">
         <div>
            <a style=" text-decoration: none; " href="#"> <img style="width: 35px; height: 35px; border-radius: 50%; border: 1.5px solid #ffffff; " src="<?php if(isset($_SESSION['filename'])){echo $_SESSION['filename'];}else{echo'./img/usericon.png';}  ?>" alt=""> </a>
            <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
         </div>
         <hr>
         <div class="ms-2 mt-2">
            <a href="profile.php" style=" text-decoration: none; " class="text-secondary btn btn-outline-light ">Edit Profile</a>
         </div>
         <hr>
         <div class="mt-2 ">
            <?php
            if (isset($_SESSION['is_login']) == true) {
               echo " 
                      <form action='logout.php' >
                        <button class='btn btn-secondary ms-2'  type='submit'  >ออกจากระบบ</button> 
                      </form> ";
            } else {
               echo "  ";
            }
            ?>

         </div>
      </div>
   </div>

   <!-- header --> 
   <?php require('headerpage.php') ?>
           

<!-- กรอกกรอกข้อมูล -->

<div class="container my-5 " id="from-input" > 

   <div class="text-center mt-4">
      <H1>เข้าสู่ระบบ</H1>
      
   </div>
   <hr>

   <div class="">
      <p class="text-center">กรุณากรอกชื่อผู้ใช้และรหัสผ่านให้ถูกต้อง</p>

<form action="login2.php" method="post">
   <div class="container mb-4 p-5" style="width: 35rem; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; border-radius: 25px;" >
            <div class="row my-3">
               <div class="col">
                  <label class="py-1" for="">Username</label>
                  <input type="text" class="form-control" placeholder="ชื่อบัญชีผู้ใช้ " name="username">
               </div>
            </div>
            <div class="row my-3">
               <div class="col">
                  <div class="">
                     <label class="py-1" for="">Password</label>
                     <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password">
                  </div>
               </div>
               
            </div>
           
            <div class="row my-3">
               <div class="col-6">
                  <div class="">
                     <button class="btn btn-success form-control py-2" type="submit" >เข้าสู่ระบบ</button>
                  </div>
               </div>
               <div class="col-6">
                  <div class="">
                     <button class="btn btn-danger form-control py-2" type="reset" >ยกเลิก</button>
                  </div>
               </div>
            </div>

         </div>
      

</form>
      
</div>
</div>
    
   

  

  


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      var session = <?php echo json_encode($_SESSION); ?>;
      if(session.Message == 'login_failed'){
         Swal.fire({
            icon: 'error',
            title: 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'comment_failed'){
         Swal.fire({
            icon: 'error',
            title: 'กรุณาเข้าสู่ระบบ!',
            showConfirmButton: false,
            timer: 1500
         })
      }
      <?php unset($_SESSION['Message']); ?>;
      
      </script>
</body>

</html>