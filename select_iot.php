<?php
    include 'connect.php';

    $sql = "SELECT * FROM tbl_iot";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Zone: " . $row["zone"]. " - Temp: " . $row["temp"]. " - Humidity: " . $row["hum"]. " - User: " . $row["users"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>