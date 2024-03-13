<?php
$conn=mysqli_connect('localhost','root','','people');

if(isset($conn)){
    echo "connected";
}else{
    echo "not connected";
}
?>
