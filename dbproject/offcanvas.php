<div class="offcanvas offcanvas-end text-center" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style=" background-color: #e5e5e5 ; width:20rem ">
      <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasRightLabel">หน้าสำหรับแก้ไขข้อมูล</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ms-3">
         <div>
            <a style=" text-decoration: none; " href="#"> <img style="width: 35px; height: 35px; border-radius: 50%; border: 1.5px solid #ffffff; object-fit:cover " src="<?php echo$_SESSION['fileimg'] ?>" alt=""> </a>
            <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
         </div>
         <hr>
         <div class="ms-2 mt-2">
            <a href="profile.php" style=" text-decoration: none; " class="text-dark btn btn-outline-light ">แก้ไขโปรไฟล์</a>
         </div>
         <div class="ms-2 mt-2">
            <a href="mytopic.php" style=" text-decoration: none; " class="text-dark btn btn-outline-light ">ลบกระทู้</a>
         </div>
         <div class="ms-2 mt-2">
            <a href="updatemytopic.php" style=" text-decoration: none; " class="text-dark btn btn-outline-light ">แก้ไขกระทู้</a>
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