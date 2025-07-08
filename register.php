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

    <h2> Register </h2>
    <form action="insert_users.php" method="post">
        Name: <input type="text" name="name" /> <br/>
        Email: <input type="text" name="email" /> <br/>
        Username: <input type="text" name="username" /> <br/>
        Password: <input type="text" name="password" /> <br/>
        <input type="submit" value="บันทึกข้อมูล" />
        <input type="reset" value="เคลียร์" />
    </form>
    
</body>
</html>