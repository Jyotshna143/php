<?php
//information inside class
class chetu{
public $a=0,$b=0,$c=0;
public function test($x,$y)
{
  $this->a=$x;
  $this->b=$y;
}
public function add()
{

  $this->c=$this->a+$this->b;
}
public function display()
{
  echo $this-> c;
}
}
$c1=new chetu();
$c1->test(10,20);
$c1->add();
$c1->display();
?>