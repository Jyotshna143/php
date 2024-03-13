<?php
//multidimentional array from table to list using for loop
$cars= array(array ("volvo",22,18),array("BMW",15,13),array("saab",5,2),array("land Rover",17,15));
 echo $cars[0][0].": in stock:".$cars[0][1]."sold:" .$cars[0][2]."<br>";
 echo $cars[1][0].": in stock:".$cars[1][1]."sold:" .$cars[1][2]."<br>";
 echo $cars[2][0].": in stock:".$cars[2][1]."sold:" .$cars[2][2]."<br>";
 echo $cars[3][0].": in stock:".$cars[3][1]."sold:" .$cars[3][2]."<br>";


 for ($row=0;$row<4;$row++)
 {
    echo"<p> <b> row number: $row </b> </p>";
    echo"<ul>";
    for($col=0;$col<3;$col++)
    {
        echo"<li>".$cars[$row][$col]."</li>";
    }
    echo"</ul>";
 }
 ?>