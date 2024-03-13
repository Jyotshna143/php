<?php
//information inside class
class chetu{
public $a=12,$b=45;
public function test($x,$y)
{
  echo $this->a;
  
  echo $this->b;
}
}
 
$c1=new chetu();
$c2=new chetu();
//$c1->test(34,44);
echo $c1->a;
echo $c2->b;
?>