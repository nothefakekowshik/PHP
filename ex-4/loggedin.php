<?php
$auth = $_COOKIE['raviauthorization'];
header("Cache-Control:no-cache");
if (!$auth == "ok") {
    header("Location:login.php");
    exit();
}
?>
<html>

<head>
    <title>Logged In</title>
</head>

<body>
    <p>Successful log-in.</p> <a href="count.php">Click for user login count</a>
    </form>
</body>

</html>