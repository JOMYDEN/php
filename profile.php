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

    <h2> Profile </h2>
    <?php
        echo "Username: $_SESSION[Username] <br/> "; 
        echo "Email: $_SESSION[Email] <br/> ";
    ?>

</body>
</html>