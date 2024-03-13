<?php
session_start();
if(isset($_SESSION['Username']) and  (time()-$_SESSION['time'])<10)
{
echo "<h1>"."welcome".$_SESSION['Username']."</h1>";
echo '<a href="logout.php">Logout</a>';

}
else{
    header("location:one.php");
}
?>