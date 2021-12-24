<!DOCTYPE html>
<html>

<head>
    <title>Palindrome Number</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <center>
        <h1 style="background-color:DodgerBlue;">Palindrome or not</h1>
        <form method="post">
            <table border="0">
                <tr>
                    <!-- Taking value 1 in an text box -->
                    <td> <input type="text" name="num1" value="" placeholder="Enter value 1" />
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="submit" value="Check" />
                    </td>
                </tr>
            </table>
        </form>
        <br><br>
        <?php   
        if (isset($_POST['submit'])) 
        {

            function Palindrome($number)
            {
                $temp = $number;
                $new = 0;
                while (floor($temp)) {
                    $d = $temp % 10;
                    $new = $new * 10 + $d;
                    $temp = $temp / 10;
                }
                echo "The reversed number is: " . $new;
                if ($new == $number) {
                    return 1;
                } else {
                    return 0;
                }
            }

            // Driver Code
            $original = $_POST['num1'];
            if (Palindrome($original)) {
                echo nl2br(" \nIt is a Palindrome.");
            } else {
                echo nl2br(" \nIt is not a Palindrome.");
            }
            return 0;
        }
        ?>
    </center>
</body>

</html>