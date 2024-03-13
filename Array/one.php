<?php
$array=[1,2,3,4,5,6,7,8,true,"Chetu"];
//echo$a[5];
//print_r($a);

$b=array(11,22,33,44,55,66);
//print_r($b);
//echo $b[3];

$c[0]="hiii";
//print_r($c);

//fetch array using for loop
/*$count=0;
for($i=0;$i<count($a); $i++)
{
    echo $a [$i] .'<br>';
    if(gettype($a[$i])=='integer')
    {
        $count += $a[$i];
    }
}*/

//fetch array using while loop

/*$add=0;
$x=0;
while($x< count($a))
{
    $add = $a[$x];
    $x++;
}
print($add);
*/


//fetch array using foreach loop
/*foreach($a as $value)
{
    echo $value;
}*/

//fetch array using pre tag.
foreach($array as $value){
{
    echo'<pre>';
    print_r($value);
    echo '</pre>';
}

}
echo $array [3];
?>