<?php
session_start();
require('server.php');



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
</style>

<body > 

<?php require('headerpage.php') ?>

<!-- แปะทุกหน้า -->
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
           


<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <form action="<!-- update_comment2.php -->" method="post">
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Comment</label>
            <textarea name="commentNew" class="form-control" id="message-text" placeholder="" ></textarea>
          </div> 
          <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" name="submit" data-bs-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary">แก้ไข</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>



  

<?php require('footerpage.php'); ?>


    

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
      
    
  </body>
</html>