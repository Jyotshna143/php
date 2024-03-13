<?php
//factorial of 6
$n=6;
$x=1;
for($i=1;$i<=$n-1;$i++)
{
    $x=$x*($i+1);
}
echo "The factorial of $n = $x"."<br>";
?>