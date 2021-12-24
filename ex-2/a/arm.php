<?php
        $n1;
        $sum=0;
        $rem;
        $temp=0;
        $n1=$_POST['n'];
        $temp=$n1;
        while($temp>0)
        {
                $rem=$temp%10;
                $sum=$sum+($rem*$rem*$rem);
                $temp=$temp/10;
        }
        if($sum==$n1)
        {
                echo"<h1>Number is armstrong</h1>";
        }
        else
        {
                echo"<h1>Not an armstrong</h1>";
        }
?>
