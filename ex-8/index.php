<!DOCTYPE html>
<html>

<head>
    <title></title>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    ?>
    <script type="text/javascript">
        ( function() 
        {
            alert(document.cookie);
            var c = document.cookie;
            var mytest1 = c.split(';');
            alert(mytest1[0] + " " + mytest1[1]);
            console.log(document.cookie);
            var i = mytest1[0].search("=");
            i = i + 1;
            if (mytest1[0].charAt(i) == "x") 
            {
                alert("working good");
            } 
            else 
            {
                console.log(document.cookie);
                window.location.assign("login.html");
            }
        } ()  );

        function delcookie() 
        {
            var c = document.cookie;
            var mytest1 = c.split(';');
            var v1 = mytest1[0].substr(0, mytest1[0].search("="));
            window.location.assign("logout.php?p1=" + v1);
        }
    </script>
</head>

<body>
    <h1>This is Home</h1>
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
    
    $sql = "CREATE TABLE user (id INT(6),name VARCHAR(30))";
    if ($conn->query($sql) === TRUE) 
    {
        echo "Table user created successfully" . "<br>";
    } 
    else 
    {
        echo "Error creating table: " . $conn->error . "<br>";
    }
    $sql = "insert into myguest values (1,'Priyanka')";
    if ($conn->query($sql) === TRUE) 
    {
        echo "Data Successfully inseted" . "<br>";
    } 
    else 
    {
        echo "Data insertion failed: " . $conn->error . "<br>";
    }
    
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            echo "id: " . $row["id"] . " Name: " . $row["name"] . "<br>";
        }
    } 
    else 
    {
        echo "0 results";
    }

    $sql = "UPDATE user SET name='Varun' WHERE id=1";
    if ($conn->query($sql) === TRUE) 
    {
        echo "Record updated successfully" . "<br>";
    } 
    else 
    {
        echo "Error updating record: " . $conn->error . "<br>";
    }
    
    $sql = "DELETE FROM user WHERE id=1";
    if ($conn->query($sql) === TRUE) 
    {
        echo "Record deleted successfully" . "<br>";
    } 
    else 
    {
        echo "Error deleting record: " . $conn->error . "<br>";
    }
    $conn->close();

    ?>
    <a href="#" onclick="delcookie()">Signout</a>
</body>

</html>