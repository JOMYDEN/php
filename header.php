<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <?php
    if(isset($_SESSION['Email'])){
      echo '<li><a href="profile.php">Profile</a></li>';
      echo '<li><a href="logout.php">logout</a></li>';
    }else{
      echo '<li><a href="login.php">login</a></li>';
      echo '<li><a href="register.php">register</a></li>';
    }
     
?>
 
</ul>