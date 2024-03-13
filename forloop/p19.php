<?php
/*
  n = 5
  1
  2 3
  4 5 6
  7 8 9 10
  11 12 13 14 15
*/
$n = 5; 
echo "n = " . $n . "<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
?>
