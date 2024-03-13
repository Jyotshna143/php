<?php
//1 to 25 table 
echo "<table border =\"2\" style='border-collapse: collapse'>";
	for ($row=1; $row <=10; $row++) 
    { 
		echo "<tr> <br>";
		for ($col=1; $col <= 25; $col++) 
        { 
		   $p = $col * $row;
		   echo "<td> $p </td> \n";
		}
	  	    echo "</tr>";
	}
		echo "</table>";
?>