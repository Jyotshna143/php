<?php
trait A{
    public function another(){
        echo"A";
    }
}
trait B{
    public function another1(){
        echo"B";
    }
}
class c{
    use a,b;
}
$obj=new c();
$obj->another1();//it implements  trait if function is different name


//trait->use
//class->extends
//inheritance->implements
//assess modifier and assess specifier is same

?>