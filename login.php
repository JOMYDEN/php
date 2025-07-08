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

    <h2>login</h2>
    <form action="login_process.php" method="post">
        <label>Username:</label>
        <input type="text"  name="Username" required>
        <br/>
        <label>Password:</label>
        <input type="password"  name="Password" required>
        <br/>
        <button type="submit">login</button>
    </form>
  
    <p>Don't have an account? <a href="register.php">register here</a></p>
    
</body>
</html>