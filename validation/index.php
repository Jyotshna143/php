<!--filter_var(var,filtername, options/flag)
int,float,boolean,email,url,ip,mac,regexp
-->
<?php
$var="44.205.70.155";
var_dump (filter_var($var,FILTER_VALIDATE_IP));
// if(filter_var($var,FILTER_VALIDATE_INT)|| filter_var($var,FILTER_VALIDATE_INT )==0){//in case of 0
    // $options=array(
    //     "options" => array(
    //     "min_range"=>20,"max_range"=>30
    //                       )
    //                 );
    // if(filter_var($var,FILTER_VALIDATE_BOOLEAN,$options)){
        if(filter_var($var,FILTER_VALIDATE_IP,FILTER_NULL_ON_FAILURE)){

    echo "<br>$var is valid url.";
}
else{
    echo "<br>$var is not an valid url.";
}
?>
