<?php

//retrive cookie from another page
echo"cookie value: " .$_COOKIE["user"];
 //to expire the cookie now
setcookie("user","",time()-(86400*30),"/");
?>
