<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>หน้าหลัก</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="homepage.css">
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

<?php require('offcanvas.php') ?>
   <!-- header --> 
<?php require('headerpage.php') ?>
   <!-- แปะทุกหน้า -->        
<?php require('vdo.php') ?>

<!-- ส่วนของ สไลด์ รูปภาพ -->

<!-- ส่วนของ การ์ดต้าง -->
<div class="container mt-5 mb-5">
  <?php require('content2.php') ?>
  <?php require('content3.php')  ?>
</div>


      
  



<div class="container-fulid bg-dark mb-5 mt-1">
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="./img/tawanchai.jpg" class="rounded mx-auto d-block" style=" height: 500px;  object-fit: cover; " alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/บัวขาว.jpg" class=" rounded mx-auto d-block " style="  height: 500px; object-fit: cover; "  alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/photoslide2.webp" class=" rounded mx-auto d-block " style="  height: 500px; object-fit: cover; "  alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/photoslide3.png" class=" rounded mx-auto d-block " style="  height: 500px; object-fit: cover; "  alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/แสนชัย.png" class=" rounded mx-auto d-block " style="  height: 500px; object-fit: cover; "  alt="...">
      </div>
      
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="container-fluid  d-flex text-align-center justify-content-center mb-5">
  <div class="card" style="width: 65rem;">
      <a href="topic.php" class="btn btn-dark">
        <div class="card-body">
          <h5 class="card-title">สร้างกระทู้</h5>    
        </div>       
      </a>
  </div>
</div>
    

<div class="mt-5">
    <div style=" height: 80px; align-items: center ; justify-content: center; display:flex; padding: 80px; background-image: linear-gradient(to bottom, #212529, #23272b, #25292e, #262c30, #282e33, #2b3237, #2f353b, #32393f, #373f46, #3d454c, #424c53, #48525a) !important; ">
      <img src="img/Hlogo2.png" style="height: 80px;"  alt="">
      <div class="text-light ms-5">
      <h5><b>MuayThai 2023</b></h5>
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
      }else if(session.Message == 'not_input'){
        Swal.fire({
            icon: 'error',
            title: 'กรุณากรอกข้อมูล!',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message=='login_success'){
        Swal.fire({
            icon: 'success',
            title: 'ยินดีต้อนรับเข้าสู่ระบบ!',
            showConfirmButton: false,
            timer: 1500
         })
      }
      <?php unset($_SESSION['Message']); ?>;
      
      </script>
</body>

</html>