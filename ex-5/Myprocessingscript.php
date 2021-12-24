<?php
$txt = "temp2.doc";
if (isset($_POST['field1']) && isset($_POST['field2'])) 
{ 
    $fh = fopen($txt, 'w');
    $txt = $_POST['field1'] . ' - ' . $_POST['field2'];
    fwrite($fh, $txt);
    fflush($fh); // Write information to the file
    fclose($fh); // Close the file
}
