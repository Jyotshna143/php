<?php
class cal{
    public $num1,$num2,$result;
    public function __construct($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
    }
    public function addition()
    {
        $this->result=$this->num1+$this->num2;
    }
}
class cal1 extends cal{
    public function display()
    {
        echo "Result is".$this->result;
    }
}
$p1=new cal1(50,32);
$p1->addition();
$p1->display();
?>