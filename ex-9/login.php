<?php
    session_start(); 
    $error=''; 
    if (isset($_POST['submit'])) 
    {
        if (empty($_POST['username']) || empty($_POST['password'])) 
        {
            $error = "Username or Password is invalid";
        }
        else
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $servername = "127.0.0.1:3307";
            $username = "root";
            $password = "";
            $dbname = "testing_db";
            

            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql="select * from students where name='$password' AND first_lang='$username'";
            $rows= $conn->query($sql);
            if ($rows == 1) 
            {
                $_SESSION['login_user']=$username; 
                header("location: profile.php"); 
            }
            else 
            {
                $error = "Username or Password is invalid";
            }
            
            $conn->close();

        }
    }
?>