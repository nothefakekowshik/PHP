<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "testing_db";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT name,first_lang FROM students";
    $result = $conn->query($sql);

    echo "<table border='1'><tr><th>Username</th><th>Password</th>";

    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc())
        {
            echo "<tr><td> " . $row["name"] . " </td><td> " . $row["first_lang"] . " </td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
        echo "0 results";
    }
    $conn->close();
?>