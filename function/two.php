<?php
//function add($a,$b) //1020
function add(&$a,&$b) //1121
{
    $a++;
    $b++;
}
function square($arg)
{
    return $arg**2;
}

$a=10;
$b=20;
add($a,$b);
echo $a,$b;
?>