<?php
function test(array $var)
{
    foreach($var as $result)
    {
        echo $result;
    }
}
test([11,2,3,55,6])
?>