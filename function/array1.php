<?php
function test()
{
    $store=func_get_args();
    foreach($store as $value)
    {
        echo $value.'<br>';
    }
}
test(55,22,45,7,88,900,25)
?>