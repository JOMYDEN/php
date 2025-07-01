<?php
    include 'connect.php';

    $ID = $_POST['ID'];
    $NAME = $_POST['NAME'];     
    $EMAIL = $_POST['EMAIL'];
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $sql = "INSERT INTO tbl_user (ID,NAME,EMAIL,USERNAME,PASSWORD) VALUES ('$ID', '$NAME', '$EMAIL', '$USERNAME', '$PASSWORD')";  

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>