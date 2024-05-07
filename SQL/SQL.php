<!doctype html>
<html lang="en">
    <body>
        <?php
        //Kết nối tới SQL: Dùng extension MySQLi
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        ?>
    </body>
</html>
