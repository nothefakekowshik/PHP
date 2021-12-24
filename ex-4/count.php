<?php session_start();
if (isset($_SESSION['visit_count']))

    $_SESSION['visit_count']++;
else
    $_SESSION['visit_count'] = 1;

?>
<html>

<head>
    <title>Counting Visit</title>
</head>

<body>
    <p>You have visited this page
        <?php echo $_SESSION['visit_count']; ?>
        time(s) in this session.</p>
</body>

</html>