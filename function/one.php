<?php
function add($a,$b)
{
    $result=$a+$b;
    return $result;
}

function square($arg)
{
    return $arg**2;
}

$store=add(1,1);
$store=square($store);
echo $store;
?>