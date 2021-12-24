<?php
$n=$_POST['id2'];
$t=$n;
$sum=0;
while($n>=1)
{
	$t1=$n%10;
	$sum=$sum*10+$t1;
	$n=$n/10;
			
}
if($sum==$t)
    echo"<h1>$t is  palindrome</h1>";
else
	echo"<h1>$t is not palindrome</h1>";
?>
