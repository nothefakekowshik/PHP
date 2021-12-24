<?php
$msg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $image = $_FILES['fileToUpload']['tmp_name'];
    $img = addslashes(file_get_contents($image));
    $Conn = new mysqli('127.0.0.1:3307', 'root', '', 'ex3db');
    if ($Conn->connect_error) 
    {
        die("Connection failed:" . $Conn->connect_error);
    }
    $sql = "INSERT INTO img_table(sno,photo)VALUES('2','" . $img . "')";
    $result = $Conn->query($sql);

    if ($result == true) 
    {
        echo "<h1>upload success</h1>";
    }
    else 
    {
        echo "upload fail .$Conn->error";
    }
}
?>
<html>

<body>
    <table>
        <tr>
            <?php
            $sql = "SELECT * FROM img_table";
            $result = $Conn->query($sql);
            if ($result->num_rows > 0) 
            {
                while ($row = $result->fetch_assoc()) 
                {
                    echo "<td>";
                    echo '<img width="500" height="500" src="data:image/jpg;base64,' . base64_encode($row['photo']) . '"/>';
                    echo "</td>";
                }
            }
            else 
            {
                echo "0 results";
            }
            $Conn->close();
            ?>
        </tr>
    </table>
</body>

</html>