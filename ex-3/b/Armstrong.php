<html>

<body style="background-color:#e6ffee;">
    <h1>
        <center>The Number is Armstrong or Not</center>
    </h1>
    <form method="post" style="background-color:#e6ffff;">
        <center>Enter a Number : <input type="number" name="number" required></center><br>
        <center><input type="submit" value="submit" name="submit"></center><br>
        <hr color: "pink">
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $num = $_POST["number"];
    $temp = $num;
    $sum = 0;
    while ($temp != 0) {
        $rem = $temp % 10;
        $sum = $sum + ($rem * $rem * $rem);
        $temp = $temp / 10;
    }
    if ($num == $sum)
        echo $num . " - This is Armstrong number!";
    else
        echo $num . " - This is not a Armstrong Number!";
}
?>