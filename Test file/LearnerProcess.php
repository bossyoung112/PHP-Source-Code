<?php
class LearnerProcess {
    private $conn;

    function getCon($dbname){
        if ($this->conn === null) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $this->conn = new mysqli($servername, $username, $password, $dbname);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        return $this->conn;
    }

    function getList_tbLearner(){
        $sql = "SELECT id, name, classname, mark1, mark2 FROM tblearner";
        $result = $this->getCon("db_learner")->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='text-center'>" . $row["id"] . "</td>";
                echo "<td class='text-center'>" . $row["name"] . "</td>";
                echo "<td class='text-center'>" . $row["classname"] . "</td>";
                echo "<td class='text-center'>" . $row["mark1"] . "</td>";
                echo "<td class='text-center'>" . $row["mark2"] . "</td>";
                $average = ($row["mark1"] + $row["mark2"]) / 2;
                echo "<td class='text-center'>" . $average . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6' class='text-center'>0 results</td></tr>";
        }
    }

    function closeCon() {
        if ($this->conn !== null) {
            $this->conn->close();
            $this->conn = null;
        }
    }
}

$ln = new LearnerProcess();
?>
