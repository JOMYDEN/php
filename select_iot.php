<link rel="stylesheet" href="style.css" />

<?php
    include 'connect.php';

    $sql = "SELECT * FROM tbl_iot2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
    include 'header.php';
?>
<table border="1">
    <tr>
        <th>Zone</th>
        <th>Temp</th>
        <th>Humidity</th>
        <th>User</th>
    </tr>

<?php
    while($row = $result->fetch_assoc()) { 
?>

<tr>
    <td><?php echo $row["zone"]; ?></td>
    <td><?php echo $row["temp"]; ?></td>
    <td><?php echo $row["hum"]; ?></td>
    <td><?php echo $row["users"]; ?></td>
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