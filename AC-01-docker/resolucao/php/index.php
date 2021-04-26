<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "DevFullCycle";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><th>Nome do curso</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
