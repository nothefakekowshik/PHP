<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "priyankadb11";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT studentid, studentname,college FROM deptIT";
    $result = $conn->query($sql);
    echo "<table border='1'><tr><th>StudentId</th><th>StudentName</th><th>College</th>";
    if ($result->num_rows > 0) 
    {    
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tr><td> " . $row["studentid"] . "
            </td><td> " . $row["studentname"] . "
            </td><td> " . $row["college"] . "
            </td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
        echo "0 results";
    }
$conn->close();
?>