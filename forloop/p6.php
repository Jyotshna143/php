<?php
//table print
// $user=2;
// for($i=0; $i<=10; $i++)
// {
//     echo $user .'*'.$i.'='.$i*$user.'<br>';
// }
// echo"<br>";
// $user=3;
// for($i=0; $i<=10; $i++)
// {
//     echo $user .'*'.$i.'='.$i*$user.'<br>';
// }

// $n = 1; /*Initializing starting number*/
// for ($i = 0; $i < 5; $i++)
// {
//     for ($j = 0; $j <= $i; $j++ )
//     {
//         echo $n." ";
//     }
//     $n = $n + 1;
//     echo "<br/>";
// }

// 

$n = 69; /*Initializing ASCII value of (A) */
for ($i = 5; $i >0; $i--)
{
    for ($j = $i; $j>0; $j-- )
    {
        echo chr($n)." ";
    }
    $n = $n + 1;
    echo "<br/>";
}

?>