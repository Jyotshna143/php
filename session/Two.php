<?php
$Username="liva";
$password=1234;
//getting information
$User=$_REQUEST['Username'];
$Pass=$_REQUEST['Password'];
if($Username==$User and $password==$Pass)
{
    session_start();
    $_SESSION['Username']=$User;
    $_SESSION['time']=time();
    if(isset($_SESSION['Username']))
    {
        header("location:Three.php");
    }
}
else{
    echo'worng password';
}