<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>หน้าหลักงานแก้</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="index.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet"> <!-- font google -->
</head>

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
  <header class="header sticky-top">
    <div class="container-fluid bg-dark-subtle">
      <nav class="navbar navbar-expand-lg bg-dark-subtle">

        <div class="container-fluid ms-auto">
          <a class="navbar-brand" href="#"> <img src="img/Muaythahilogo.png" style="height: 80px;" alt=""> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
              <a class="nav-link active" href="topic.php">กระทู้</a>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ประวัติศาสตร์
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="history.php">ประวัติศาสตร์มวยไทย</a></li>
                  <li><a class="dropdown-item" href="history2.php">มวยไทยมรดกภูมิปัญญาทางวัฒนธรรม</a></li>
                  <li><a class="dropdown-item" href="history3.php">ประวัตินายขนมต้ม</a></li>
                  <li><a class="dropdown-item" href="history4.php">กำเนิดวันมวยไทย</a></li>
                </ul>
              </li>
              <a class="nav-link active" href="contact.php">ติดต่อ</a>
              <?php
              if (isset($_SESSION['is_login']) == true) {

                echo " <button class='btn btn-light' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'>" . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "<i class='bi bi-caret-down-fill ms-2'></i>" . "</button>";
              } else {
                echo "  <a href='register.php' class='nav-link p-2' id='navregister'>
                <i class='bi bi-person-add'></i>
                สมัครสมาชิก 
                </a> " . " <a href='login.php' class=' nav-link p-2 me-2' id='navlogin'>เข้าสู่ระบบ
                <i class='bi bi-box-arrow-in-right'></i>
                </a>";
              }
              ?>

            </div>
          </div>




        </div>
      </nav>
    </div>

  </header>
   <!-- แปะทุกหน้า -->     

<!-- ส่วนของ สไลด์ รูปภาพ -->
<section class=" bg-black"  >
<div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="3000">
          <img src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5B2xYCdv8z5abTksqWwQ501HGjPzq0FsbtLKeJOxbfc0OTL7upg.jpg" class="rounded  ro mx-auto d-block" style=" height: 500px; object-fit: cover;  object-fit: cover; " alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="https://www.salika.co/wp-content/uploads/2019/01/shutterstock_592172963.jpg" class=" rounded mx-auto d-block " style="  height: 500px; object-fit: cover; "  alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/photoslide3.png" class=" rounded mx-auto d-block " style="  height: 500px; object-fit: cover; "  alt="...">
        </div>
        <div class="carousel-item ">
          <img src="https://www.educatepark.com/wp-content/uploads/2018/10/muay-thai-s.jpg" class=" rounded mx-auto d-block " style="  height: 500px; object-fit: cover; "  alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/photoslide5.png" class="rounded  ro mx-auto d-block" style=" height: 500px; object-fit: cover;  object-fit: cover; " alt="...">
        </div>

      </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<!-- ส่วนของ การ์ดต้าง -->
<section>
  <div class="main-content">
  <div class="container my-5" id="content" > 

<div class="text-center mt-4">
  <strong>
       <H1>มวยไทย</H1>
  </strong>

           
</div>
<hr>

<div class="">
   <p class="">“ มวยไทยเป็นมรดกทางภูมิปัญญาทางวัฒนธรรม เป็นศิลปะการต่อสู้ป้องกันตัวของชนชาติไทยมาตั้งแต่ครั้งโบราณ เป็นการใช้อาวุธของร่างกาย 9 อย่าง หรือที่เรียกว่า นวอาวุธ ได้แก่ มือ 2 เท้า 2 เข่า 2 ศอก 2 และศีรษะ 1 อย่างมีประสิทธิภาพ นับเป็นศิลปะการต่อสู้ที่เก่าแก่ประเภทหนึ่งของโลก
   อกลักษณ์ของมวยไทยที่ทำให้มวยไทยมีความโดดเด่นและถือเป็นศิลปะชั้นสูงคือการใช้อวัยวะต่างๆ เป็นประดุจดังเกราะและอาวุธ ใช้ชั้นเชิงไหวพริบและวิชาเข้าต่อสู้กัน ไม่ใช่กำลังแต่เพียงอย่างเดียว กอปรด้วย “ศาสตร์” อันได้แก่การเรียนรู้จุดอ่อน จุดแข็งของร่างกายที่จะพิชิตและเอาชนะคู่ต่อสู้ “ศิลป์” คือ ลักษณะการใช้นวอาวุธอันมีรายละเอียดปลีกย่อยอย่างพิสดาร ทำให้มวยไทยเป็นศิลปะการต่อสู้ที่มีมนต์ขลังและเป็นการต่อสู้ที่มีชั้นเชิงเป็นที่ประทับใจของคนทั้งโลกการฝึกมวยโบราณ แบ่งเป็น ๓ ขั้นตอน
   มวยไทยนั้นมีหลักการพื้นฐานเดียวกัน คือ การใช้หมัด เท้า เข่า ศอก และศีรษะ ก่อเกิดกระบวนท่าทางต่าง ๆ นับร้อย ๆ กระบวนท่า โดยในแต่ละท้องที่ได้พัฒนาความสามารถและความถนัดในเชิงมวยที่แตกต่างกัน ซึ่งสะท้อนออกมาในลักษณะของความชำนาญในเชิงมวยและเทคนิควิธี โดยเฉพาะการคาดเชือกมีการเปรียบเปรยความสามารถเชิงมวยของท้องถิ่นต่างๆ ว่า “หมัดหนัก โคราช ฉลาดลพบุรี ท่าดีไชยา ไวกว่าท่าเสา ครบเครื่องพลศึกษา ”
   </p>
</div>
<div>
  <div class="container-xxl">
    <div class="row">
          <div class="col col-lg-3 col-md-2 col-sm-12 my-3 " >
          <div class="card" style="width: 18rem;">
              <a href="history.php" class="btn btn-outline-secondary">
                <img src="https://mpics.mgronline.com/pics/Images/560000001297401.JPEG" style="height:200px"  class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">ประวัติศาสตร์มวยไทย </h5>
                  <p class="card-text">ประวัติศาสตร์ความเป็นมาของมวยไทย</p>
                  <div class="" style="text-align:center">
                  </div>
                </div>       
              </a>
          </div>
        </div>
        <div class="col col-lg-3 col-md-2 col-sm-12 my-3 " >
          <div class="card" style="width: 18rem;">
              <a href="history2.php" class="btn btn-outline-secondary">
                <img src="https://gumlet.assettype.com/ejan%2F2023-02%2Ff2596a5a-c193-432a-a574-92d438b9b480%2Fn20220708121604_21496.jpg?auto=format%2Ccompress&format=webp&w=768&dpr=1.0" style="height:200px"  class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">มรดกมวยไทย</h5>
                  <p class="card-text">มวยไทย มรดกภูมิปัญญาทางวัฒนธรรม</p>
                  <div class="" style="text-align:center">
                  </div>
                </div>       
              </a>
          </div>
        </div>
        <div class="col col-lg-3 col-md-2 col-sm-12 my-3 " >
          <div class="card" style="width: 18rem;">
              <a href="history3.php" class="btn btn-outline-secondary">
                <img src="https://us-fbcloud.net/wb/data/1309/1309811-img.uvnwr4.12wsn.jpg" style="height:200px"  class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">ประวัตินายขนมต้ม </h5>
                  <p class="card-text">ประวัตินายขนมต้ม ประวัติมวยไทย</p>
                  <div class="" style="text-align:center">
                  </div>
                </div>       
              </a>
          </div>
        </div>
        <div class="col col-lg-3 col-md-2 col-sm-12 my-3 " >
          <div class="card" style="width: 18rem;">
              <a href="history4.php" class="btn btn-outline-secondary">
                <img src="https://news.gimyong.com/static/uploads/pictures/201602/1688663139-2328.jpg" style="height:200px"  class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">กำเนิดวันมวยไทย </h5>
                  <p class="card-text">ประวัติวันมวยไทย กำเนิดวันมวยไทย</p>
                  <div class="" style="text-align:center">
                  </div>
                </div>       
              </a>
          </div>
        </div>
    </div>
  </div>

</div>

  </div>
</section>
        <div class="footer bg-body-secondary">
             <div class="container  p-5 mb-0 d-flex align-items-center justify-content-center" style=" height: 50px; ">
                <img src="img/Muaythahilogo.png" style="height: 60px;" alt="">
                <div class="text-dark ms-5">
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
      }
      <?php unset($_SESSION['Message']); ?>;
      
      </script>
</body>

</html>