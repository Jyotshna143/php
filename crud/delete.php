<?php
include 'connection.php';
$id=$_REQUEST['id'];
$sql="delete from collage where id=$id";
mysqli_query($conn,$sql);
header('Location:view.php');

?>