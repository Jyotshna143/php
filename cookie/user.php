<?php
$cookie_name="user";
$cookie_value="Jyotshna";

setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>

<html>
    <body>
<?php
// 

//to set cookie
// setcookie(name,value,expire,path,domain,secure,httponly)

//to view cookie
//$_COOKIE[name]

if(!isset($_COOKIE[$cookie_name])){
echo"cookie is not set";
}
else{
   echo $_COOKIE[$cookie_name];
}





?>
    </body>

</html>