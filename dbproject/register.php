<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>สมัครสมาชิก</title>
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
  #from-input{
   box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
   border: 1px solid #e5e5e5;
    border-radius: 10px; 
    width: 50rem ;
}
</style>

<body >   
<?php require('headerpage.php') ?>
<?php require('offcanvas.php') ?>

   <!-- header --> 
   
<!-- กรอกกรอกข้อมูล -->

<div class="container my-5 py-5" id="from-input" > 

   <div class="text-center mt-4">
      <H1>สมัครสมาชิก</H1>
      
   </div>
   <hr>

   <div class="">
      <p class="text-center">กรุณากรอกข้อมูลให้ครบ</p>

<form action="register2.php" method="post">
   <div class="container mb-4">
            <div class="row my-3">
               <div class="col">
                  <label class="py-1" for="">Username</label>
                  <input type="text" class="form-control" placeholder="ชื่อบัญชีผู้ใช้ " name="username" require>
               </div>
            </div>
            <div class="row my-3">
               <div class="col-6">
                  <div class="">
                     <label class="py-1" for="">Password</label>
                     <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" require>
                  </div>
               </div>
               <div class="col">
                  <div class="">
                     <label class="py-1 " for="">Password Confirm</label>
                     <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน " name="pass-con">
                  </div>
               </div>
            </div>
            <div class="row my-3">
               <div class="col-6">
                  <div class="">
                     <label class="py-1" for="">Firstname</label>
                     <input type="text" class="form-control" placeholder="ชื่อจริง" name="firstname">
                  </div>
               </div>
               <div class="col">
                  <div class="">
                     <label class="py-1 " for="">Lastname</label>
                     <input type="text" class="form-control" placeholder="นามสกุล" name="lastname">
                  </div>
               </div>
            </div>
            <div class="row my-3">
               <div class="col">
                  <div class="">
                     <label class="py-1" for="">Email</label>
                     <input type="email" class="form-control" placeholder="อีเมลล์" name="email">
                  </div>
               </div>
               <div class="col">
                  <div class="">
                     <label class="py-1" for="">Phone</label>
                     <input type="text" class="form-control" placeholder="เบอร์ติดต่อ" name="phone">
                  </div>
               </div>
            </div>

            <div class="row my-3">
               <div class="col-6">
                  <div class="">
                     <button class="btn btn-success form-control py-2" type="submit" >สมัครสมาชิก</button>
                  </div>
               </div>
               <div class="col-6">
                  <div class="">
                     <button class="btn btn-danger form-control py-2" type="reset" >ยกเลิก</button>
                  </div>
               </div>
            </div>

         </div>

      </div>

   </div>

</form>
      

   

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      var session = <?php echo json_encode($_SESSION); ?>;
      if(session.Message == 'insert_success'){
         Swal.fire({
            icon: 'success',
            title: 'สมัครสมาชิกสำเร็จ!',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'confrimfailed'){
         Swal.fire({
            icon: 'error',
            title: 'รหัสผ่านไม่ตรงกัน!',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'Duplicate'){
         Swal.fire({
            icon: 'error',
            title: 'ชื่อผู้ใช้นี้มีอยู่ในระบบแล้ว!',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'insert_failed'){
         Swal.fire({
            icon: 'error',
            title: 'กรุณากรอกข้อมูล username!',
            showConfirmButton: false,
            timer: 1500
         })
      }
      <?php unset($_SESSION['Message']); ?>;
      
   </script>
</body>

</html>