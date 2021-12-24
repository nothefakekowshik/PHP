<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "testing_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }
    $sql = "UPDATE student1 SET col_name='pvpsit' WHERE id=16";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating table:" . $conn->error;
    }
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="select6.php">click to view table data</a><br><br>
    <?php
    $conn->close();
    ?>
</body>

</html>