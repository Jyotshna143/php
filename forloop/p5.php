<?php
// print 1-50 prime using for loop

for($number=10;$number<100;$number++){
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
    echo $number." , ";
}
}
 echo"<br>";

//print 1-50 prime using While loop

$number=10;
while($number <100)
{
  $count=0;
  
  for ($i=1;$i<=$number;$i++)
  {
    if(($number%$i)==0)
    {
      $count++;
    }
  }
   if($count<3)
  {
   echo $number." , ";
   }
  $number=$number+1;
}

?>

