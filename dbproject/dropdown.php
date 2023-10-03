<?php
session_start();
require('server.php');


$sql2 = "SELECT comments.customerID,customers.firstname,commentDetail,commentDate FROM comments 
INNER JOIN customers ON  comments.customerID = customers.customerID";

$resalt2 = mysqli_query($conn,$sql2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- iconbootstrap -->
   <title>เว็บบอร์ด1</title>
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



<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style=" background-color: realiceblue ; width:20rem ">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">หน้าสำหรับแก้ไขข้อมูล</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body ">
   <div>
      <?php echo $_SESSION['firstname']; ?>
   </div>
    <div>
       <a href="profile.php" style=" text-decoration: none; " class="form-control"> Your Profile </a>
    </div>
   
  </div>
</div>

<!-- As a heading -->
<?php require('headerpage.php') ?>




  <?php require('headerpage.php') ?>


<!-- กรอกกรอกข้อมูล -->

<div class="container my-5" id="content" > 

   <div class="text-center mt-4">
      <H1>เว็บบอร์ด</H1>
      
   </div>
   <hr>
   
   <div class="">
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti odit veritatis repellat, placeat totam error ratione, quia distinctio sint atque quis. Repellat, rem voluptatem nihil dolorum perspiciatis similique eveniet ratione doloribus sit officia consectetur amet recusandae porro dolorem modi quidem voluptatibus corporis accusamus reiciendis! A facere rerum sed amet nam velit placeat est veritatis quam tempore cupiditate animi, quidem nostrum vero distinctio, quos laborum ducimus libero iste laboriosam, optio magnam eaque doloremque ratione. Reprehenderit commodi, distinctio placeat iste unde vitae eum alias quaerat rem atque eveniet, iusto exercitationem quo quam doloremque fuga accusantium, iure nobis incidunt asperiores voluptas? Dolores quos sequi, iste expedita fuga voluptatibus corporis velit rerum aspernatur architecto, beatae omnis? Doloribus sit officia voluptate soluta sequi eos asperiores assumenda adipisci impedit modi unde expedita iusto inventore cupiditate ipsa cum atque illum tempore voluptas, animi alias. Laudantium voluptates quos dolorum illo, non incidunt eveniet blanditiis temporibus? Quam voluptas fugit dignissimos, minima maiores reprehenderit corporis quaerat, amet mollitia consequuntur error in aspernatur! Nobis, tenetur quae? Natus modi eos, cum, atque quis eligendi quaerat dolorum inventore, repudiandae quisquam quod incidunt veniam consequuntur laborum perferendis temporibus velit illo nemo. Nesciunt enim labore necessitatibus exercitationem nemo a eligendi impedit quaerat praesentium reiciendis molestiae laborum suscipit harum corrupti nobis sapiente, vel, at expedita ratione dolorem voluptatem est odit non! Totam recusandae repellat est saepe quo, at eligendi debitis temporibus, velit doloribus voluptates sed impedit deleniti in vitae rem eum tempore iure harum eaque inventore sapiente? Autem error rem totam in sapiente accusantium deserunt voluptatem impedit quas dolor illo delectus alias voluptates exercitationem expedita, quod minus vero beatae quisquam. Sint, blanditiis! Repellendus quo veniam voluptatum, quis in nostrum sapiente, nobis voluptates repudiandae alias cum autem voluptatem! Quidem ab eum aspernatur voluptatum odio recusandae laborum accusamus adipisci ratione, consequuntur labore temporibus facere, ex consectetur eos laudantium odit, nulla repellat. Ipsum optio aut iure dolore corporis obcaecati ea. Ut, officiis quos officia deleniti quae esse amet pariatur. Non voluptatum repudiandae facere reprehenderit esse perferendis, animi sint neque ipsam quae nulla exercitationem ullam, optio, tempora cum aperiam praesentium culpa sunt cumque consectetur? Ipsum aperiam nemo tempore magnam asperiores cum voluptas debitis voluptatibus ut odio ex rerum possimus minus officia vitae, laudantium, tenetur exercitationem laboriosam voluptates quod. Voluptas cumque non veritatis quos hic deserunt accusamus dignissimos dolor, odio corrupti autem iste dolorum ullam enim pariatur ut, placeat eum nisi animi. Distinctio nisi, numquam, alias reprehenderit temporibus esse sapiente delectus laudantium blanditiis et dolor odit, rerum dicta corrupti laborum voluptas aperiam autem dolores quia unde officia aliquid explicabo quae totam? Velit nemo ratione, totam atque deleniti perspiciatis eius, placeat modi nisi, dolorem aspernatur aliquam! Nisi, totam ut assumenda laudantium dolorum ex tenetur sapiente asperiores, mollitia sit quo maiores nam, laborum non voluptatem laboriosam inventore porro harum. Eum ad mollitia hic quaerat illo aliquid similique quidem accusamus, in assumenda possimus nesciunt corporis accusantium minus quos ducimus eius, deleniti delectus. Doloribus nulla sit aliquid corrupti est nesciunt, recusandae sequi nisi maxime tempore fuga earum ducimus! Accusamus possimus, non doloremque tempore eum iusto?</p>
  </div>
  <div class="form-floating mb-3">
    <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder="name@example.com">
    <label for="floatingEmptyPlaintextInput"></label>
  </div>

  
    <div class="container">
      <?php while($row2=mysqli_fetch_assoc($resalt2)){?>
        <div class="" >
          
            <h5 class="accordion-header">
              <img src="./img/usericon.png" alt="" style=" height: 30px; width: 30px; border-radius: 50%; margin-right: 5px; ">
                <?php echo$row2['firstname']?>
            </h5>
            <p>แสดงความคิดเห็น วันที่ <?php echo$row2['commentDate']?>  </p> 
          <div class="alert alert-light" role="alert">
            <?php echo $row2['commentDetail'] ?>
          </div>
        </div>

      <?php }?>




  <form action="comment.php" method="post">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here"  name="comment" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Comments</label>
      </div>
      
      <div class="d-flex align-content-end justify-content-end mt-3">
        <button class="btn btn-secondary " type="submit">comment</button>
      </div>
        
    </div>
   
  </form>
  


</div>



 

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      var session = <?php echo json_encode($_SESSION); ?>;
      if(session.Message == 'login_success'){
          Swal.fire({
            icon: 'success',
            title: 'เข้าสู่ระบบสำเร็จ!',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message=='comment_success'){
        Swal.fire({
            icon: 'info',
            title: 'แสดงความคิดเห็นแล้ว',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'comment_failed'){
        Swal.fire({
            icon: 'warning',
            title: 'กรุณาเข้าสู่ระบบก่อน',
            showConfirmButton: false,
            timer: 1500
         })
      }else if(session.Message == 'logout'){
        Swal.fire({
            icon: 'success',
            title: 'คุณได้ออกจากระบบแล้ว',
            showConfirmButton: false,
            timer: 1500
         })
      }
      <?php unset($_SESSION['Message']); ?>;
      
    </script>
  </body>
</html>