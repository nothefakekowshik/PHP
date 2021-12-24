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
    $a = $_POST["studentid"];
    $b = $_POST["studentname"];
    $c = $_POST["collegename"];
    $sql = "INSERT INTO deptIT(studentid,studentname,college) VALUES ('$a','$b','$c')";
    if ($conn->query($sql) === TRUE) 
    {
        echo "Inserted record successfully";
        echo "<a href='display.php'>just click here for data</a>";
    } 
    else 
    {
        echo "Error while inserting: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>