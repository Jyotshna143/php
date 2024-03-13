<?php
//infermation outside function
class chetu{
public $name,$address,$age;
public function set ($n,$a,$age)
{


  $this->name=$n;
  $this->address=$a;
  $this->age=$age;
}
public function display()
{
  echo 'My name is'.$this->name.'lived in'.$this->address.'and i am'.$this->age.'old'.'<br>';
}
}
$c1=new chetu();
$c2=new chetu();
$c3=new chetu();
$c1->set('Abhijit','noida',56);
$c2->set('Abha','paradeep',26);
$c3->set('jit','Delhi',16);
$c1->display();
$c2->display();
$c3->display();