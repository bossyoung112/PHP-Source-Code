<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="test01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO MyGuests (firstname, lastname, email) 
VALUES ('Jane' ,'Doe', 'jane@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record create successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; 
}
$conn->close();
?>