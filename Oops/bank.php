<?php
class bank{
    public $current_bal,$deposite,$withdraw;
    public function __construct($name,$type_of_ac,$bal){
        $this->current_bal=$bal;
        $this->account=$type_of_ac;
        $this->name=$name;
    }
    public function withdraw($amount){
        if($amount<=$this->current_bal){
            $this->current_bal-=$amount;
            echo 'debited : '.$amount."<br>";}
            else{
                echo 'insufficient balance';
            }
        }
    public function deposite($amount){
        $this->current_bal+=$amount;
        echo  'credited : ' .$amount;
    }
    public function info(){
        echo 'name : '.$this->name.'<br>'.'current balance: ',$this->current_bal."<br>";
    }
}
$rohan=new bank("rohan",'saving',1000000);
$rohan->info();
$rohan->withdraw(113000);
$rohan->deposite(13000);
$rohan->info();

?>