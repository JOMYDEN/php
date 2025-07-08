<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php
    include 'header.php';
  ?>

   <h2>Welcome to Website</h2>
   <?php 
   if(isset($_SESSION['Email'])){
 echo"$_SESSION[Email]"; 
   }
  ?>
  
   <p class="content"> ยินดีต้อนรับเข้าสู่เว็บไซต์ </p>
   <div id="aaa">
      โดย Master_Jo
  </div>

  <a href="#" class="btn">เข้าสู่ระบบ</a>
  <a href="#" class="reg">สมัครสมาชิก</a>

</body>
</html>

  