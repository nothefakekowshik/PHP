<?php
    $p1=$_GET['p1'];
    $p1=trim($p1);
    unset($_COOKIE[$p1]);
    setcookie($p1,"0", time()-3600,"/");
    echo "<h4>Logged Out</h4>";
    echo "<a href='login.html'>click here login</a>";
?>