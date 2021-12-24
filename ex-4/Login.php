<?php
if (isset($_POST['login_button'])) 
{
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user && $pass) 
    {
        setcookie("raviauthorization", "ok");
        header("Location:loggedin.php");
        exit();
    }
}
?>
<html>

<head>
    <title>Setting Cookie</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Username: <input type="text" name="username"> <br />
        Password: <input type="password" name="password"> <br /> <br />
        <input type="submit" name="login_button" value="Log In">
    </form>
</body>

</html>