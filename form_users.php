<link rel="stylesheet" href="style.css" />

<?php
   include 'header.php';
?>

<form action="insert_users.php" method="post">
    Name: <input type="text" name="name" /> <br/>
    Email: <input type="text" name="email" /> <br/>
    Username: <input type="text" name="username" /> <br/>
    Password: <input type="text" name="password" /> <br/>
    <input type="submit" value="บันทึกข้อมูล" />
    <input type="reset" value="เคลียร์" />
</form>