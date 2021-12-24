<!DOCTYPE html>
<html>

<body>
    <?php
    $myXMLData =
        "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Varun</to>
<from>Priyanka</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";
    $xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
    echo "<br>";
    echo $xml->to;
    echo "<br>";
    echo $xml->from;
    echo "<br>";
    echo $xml->body;

    ?>
</body>

</html>