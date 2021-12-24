<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "testing_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed:" . $conn->connect_error);
    }
    $sql = "CREATE TABLE student1( id INT(6),  name VARCHAR(30), dept VARCHAR(10), col_name VARCHAR(10), phm INT(10) )";
    if ($conn->query($sql) === TRUE) {
        echo "Table student 1 created successfully";
    } else {
        echo "Error creating table:" . $conn->error;
    }
?>


<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="select6.php">click to view the data in the student table</a>
    <?php
        $conn->close();
    ?>
</body>

</html>