<?php
//prime or not
$number=12;
$count=0;
for($i=2;$i<=$number/2;$i++)
{
    if($number%$i==0)
    {
        $count++;
        break;
    }
}
if($count==0){
    echo'prime';
}
else{
    echo'not prime';
}
?>