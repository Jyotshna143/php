<!DOCTYPE html>
<!--1 to 25 multiply table-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table align="left" border="1" cellpadding="3" cellspacing="0">
        <?php
        for($i=1; $i<=25; $i++)
        {
            echo"<tr>";
            for($j=1;$j<=10;$j++)
            {
                echo"<td> $i *$j =".$i*$j."</td>";
            }
            echo"</tr>";
        }
        ?>
    </table>
</body>
</html>