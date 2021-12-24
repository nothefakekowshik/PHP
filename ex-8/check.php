<?php
$username = $_POST['t1'];
$password = $_POST['t2'];
if (($username == "kowshik") && ($password == "1234")) {
    setcookie("test", "x", time() + (8640000 * 30), "/");
    header("Location:index.php");
} else {
    header("Location:login.html");
}
