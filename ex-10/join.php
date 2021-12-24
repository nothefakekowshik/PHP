<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "priyanka10";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT pvp.enrollID, deptIT.StudentName, pvp.StudentID FROM pvp INNER JOIN deptIT ON pvp.StudentID=deptIT.StudentID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            echo "<br> Enrollid: " . $row["enrollID"] . " - StudentName: " .
                $row["StudentName"] . " -StudentID: " . $row["StudentID"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>