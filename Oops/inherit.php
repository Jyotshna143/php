<?php
class cal{
    public $num1,$num2,$result,$result1;
    public function __construct($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
    }

    public function addition()
    {
        $this->result=$this->num1+$this->num2;
    }
    public function disolay(){
        echo'Grand parent';
    }
}
class cal1 extends cal{
    public function display()
    {
        echo "Result is Add".$this->result;
    }

}
class cal2 extends cal1{
    public function substract()
    {
        $this->result1=$this->num1-$this->num2;
    }

    public function display()
    {
        echo "Result is Add".$this->result1;
        parent::display();
    }
}
$son=new cal2(50,32);
$son->addition();
$son->substract();
$son->display();

?>