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
    $sql = "SELECT * FROM student1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            echo "id:" . $row["id"] . "-Name:" . $row["name"] . "-dept" . $row["dept"] . "-college_name" . $row["col_name"] . "-phone_number" . $row["phm"] . "<br>";
            # code...
        }
    }
    else 
    {
        echo "0 results";
    }
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="delete6.php">click to delete a row</a><br><br>
    <a href="update6.php">click to update a row</a><br><br>
    <?php
        $conn->close();
    ?>
</body>

</html>