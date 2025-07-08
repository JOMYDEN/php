<link rel="stylesheet" href="style.css" />

<?php
   include 'header.php';
?>

<form action="insert_iot.php" method="post">
    Zone: <input type="text" name="zone" /> <br/>
    Tempolary: <input type="text" name="temp" /> <br/>
    Humidity: <input type="text" name="hum" /> <br/>
    User: <input type="text" name="user" /> <br/>
    <input type="submit" value="บันทึกข้อมูล" />
    <input type="reset" value="เคลียร์" />
</form>