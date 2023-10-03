<?php
session_start();

require('server.php');
$id = $_SESSION['customerID'];
$sql = "SELECT * FROM topics WHERE customerID = $id";
$resalt = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>ลบกระทู้</title>
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

<?php require('offcanvas.php') ?>

   <!-- header --> 
<?php require('headerpage.php') ?>
   <!-- แปะทุกหน้า -->        
<div class="container m-5 p-5 vh-100">
   <?php while($row=mysqli_fetch_assoc($resalt)) { ?>
      <div class="row">
         <div class="col-6 m-3">
         <div class="card my-5 " style="width: auto;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
         <div class="card-body">
            <form action="topic_delete.php" method="post" >

               <input type="text" class="d-none" name="topicID" value="<?php echo $row['topicID'] ?>">
               <h5 class="card-title"><?php echo $row['topicName'] ?></h5>
               <h6 class="card-subtitle mb-2 text-body-secondary" name="datetime"></h6><?php echo $row['topicdatetime'] ?></h6>
               <p class="card-text" name="detail"></p><?php echo $row['topicDetail'] ?></p>
               <button class="btn btn-danger form-control" type="submit" >ลบ</button>

            </form>
         </div>
         </div>     
         </div>
      </div>
   <?php } ?>

</div>     

        

  





   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      var session = <?php echo json_encode($_SESSION); ?>;
      if(session.Message == 'delete_success'){
         Swal.fire({
            icon: 'success',
            title: 'ลบสำเร็จ!',
            showConfirmButton: false,
            timer: 1500
         })
      }
      <?php unset($_SESSION['Message']); ?>;
      
      </script>
</body>

</html>