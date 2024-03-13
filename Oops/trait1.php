<?php
trait A{
    public function another(){
        echo"A";
    }
}
trait B{
    public function another(){
        echo"B";
    }
}
class c{
    use a,b{
        a::another insteadOf b;
        b::another as a1;
    }
}
$obj=new c();
$obj->a1();//it implements trait if function is same name
?>