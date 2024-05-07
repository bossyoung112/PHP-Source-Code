<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="productdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "SELECT id, pname, company, year, band FROM tbtproduct";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["id"] . "-" . $row["pname"] . '-' . $row["company"] . '-' . $row["year"] . '-' . $row["band"] . "<br>" ;
    }
}
else {
    echo "0 results";
}
$conn->close();
?>