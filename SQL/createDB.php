<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE test01";
if ($conn->query($sql) == TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->connect_error;
}
$conn->close();
?>