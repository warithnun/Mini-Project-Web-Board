<header class="header sticky-top">
   <div class="container-fluid " style=" background-image: linear-gradient(to bottom, #525252, #464647, #3a3b3d, #2d3033, #212529);">
      <nav class="navbar navbar-expand-lg ">
         <div class="container-fluid ms-auto">
            <a class="navbar-brand" href="#"> <img src="img/Hlogo2.png" style="height: 80px;" alt=""> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav ms-auto">
                  <a class="nav-link text-light" aria-current="page" href="index.php">หน้าหลัก</a>
                  <a class="nav-link text-light" href="topic.php">กระทู้</a>
                  <li class="nav-item dropdown">
                     <a class="nav-link active dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ประวัติศาสตร์
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="history.php">ประวัติศาสตร์มวยไทย</a></li>
                        <li><a class="dropdown-item " href="history2.php">มวยไทยมรดกภูมิปัญญาทางวัฒนธรรม</a></li>
                        <li><a class="dropdown-item " href="history3.php">ประวัตินายขนมต้ม</a></li>
                        <li><a class="dropdown-item " href="history4.php">กำเนิดวันมวยไทย</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link active dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ศิลปะมวยไทย
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="ct_page1.php">แม่ไม้มวยไทย</a></li>
                        <li><a class="dropdown-item " href="ct_page2.php">ลูกไม้มวยไทย</a></li>
                        <li><a class="dropdown-item " href="ct_page3.php">รำไหว้ครูมวยไทย</a></li>
                        <li><a class="dropdown-item " href="ct_page4.php">อาชีพมวย</a></li>
                     </ul>
                  </li>
                  <a class="nav-link text-light" href="contact.php">ติดต่อ</a>
                  <?php
                  if (isset($_SESSION['is_login']) == true) {

                     echo " <button class='btn btn-light mx-4' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'>". "<i class='bi bi-person-fill'></i> "  . "</button>";
                  } else {
                     echo "  <a href='register.php' class='nav-link p-2 text-light' id='navregister'>
                     <i class='bi bi-person-add'></i>
                     สมัครสมาชิก 
                     </a> " . " <a href='login.php' class=' nav-link p-2 me-2 text-light' id='navlogin'>เข้าสู่ระบบ
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