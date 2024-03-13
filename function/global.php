<?php
$var=20;
function add(&$a,&$b)
{
    $a++;
    $b++;
    global $var; // global :keyword
    echo $var;
    echo "<br>";
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