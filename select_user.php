<?php
include 'connect.php';

$sql = "SELECT * FROM tbl_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"]. "</td>
                <td>" . $row["NAME"]. "</td>
                <td>" . $row["EMAIL"]. "</td>
                <td>" . $row["USERNAME"]. "</td>
                <td>" . $row["PASSWORD"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}