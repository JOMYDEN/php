<link rel="stylesheet" href="style.css" />

<?php
    include 'connect.php';

    $sql = "SELECT * FROM tbl_users2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
    include 'header.php';   
?>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
    </tr>

<?php
    while($row = $result->fetch_assoc()) { 
?>
<tr>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
    <td><?php echo $row["Username"]; ?></td>
    <td><?php echo $row["Password"]; ?></td>
</tr>

<?php
    }
?>

</table>

<?php
    } else {
        echo "0 results";
    }

    $conn->close();
?>