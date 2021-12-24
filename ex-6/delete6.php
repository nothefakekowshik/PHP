<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "testing_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }
    $sql = "DELETE FROM student1 WHERE id=7";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting table:" . $conn->error;
    }
?>
<!DOCTYPE html>
<html>

<head>
    
</head>

<body>
    <a href="select6.php">click to view table data</a><br><br>
    <a href="update6.php">click to update a row value</a><br><br>
    <?php
        $conn->close();
    ?>
</body>

</html>