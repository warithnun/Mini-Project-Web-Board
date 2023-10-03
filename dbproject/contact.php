<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>ติดต่อ</title>
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

   <!-- header --> 
   
   <!-- แปะทุกหน้า -->        
<?php require('offcanvas.php') ?>


<!-- ส่วนของ สไลด์ รูปภาพ -->
 <div class="container  p-5 ">
  
  <div class="card  vh-100 pt-5 bg-light">
    <div class="row">
    <div class="col-6">
      <div class="d-flex justify-content-center align-items-center"><img src="./customer_img/profile2.jpg" style="height: 500px;border-radius: 50%;" alt=""></div>
      <div class="d-flex justify-content-center align-items-center" style=" height: 30% " > 
            
            <a class="bg-light text-center" target="_blank" style="text-decoration: none;" href="https://www.facebook.com/NeBSK">
            <i class="bi bi-facebook me-2" ></i>
            Sappakorn Keannakum
            </a>       
      </div >
    </div>
    <div class="col-6">
    <div class="container d-flex justify-content-center align-items-center"><img src="./customer_img/tar.jpg" style="height: 500px; border-radius: 50%; " alt=""></div>
      <div class="d-flex justify-content-center align-items-center" style=" height: 30% ">
            
            <a class="bg-light text-center " target="_blank" style="text-decoration: none; " href="https://www.facebook.com/tarwarith">
            <i class="bi bi-facebook me-2"></i>
            Warithnun Phakdeerat
            </a>
          </div>
    </div>
  </div>
  </div>
  
 </div>
<!-- ส่วนของ การ์ดต้าง -->


    

   <?php require('footerpage.php'); ?>


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
      }
      <?php unset($_SESSION['Message']); ?>;
      
      </script>
</body>

</html>