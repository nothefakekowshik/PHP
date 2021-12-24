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
    $x = $_POST["username"];
    $y = $_POST["password"];
    $sql = "INSERT INTO students (name,first_lang) VALUES ('$x', '$y')";
    if ($conn->query($sql) === TRUE) 
    {
        echo "Inserted record successfully";
        echo "<a href='display7.php'>want to access data from DB just click here </a>";
    } 
    else 
    {
        echo "Error while inserting: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>