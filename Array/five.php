<?php
//multidimentional array to HTML
$movies=array(array('ofice space','comedy','mike'),array('matrix','action','andy'),array('lost in','drama','sofia'),array('nelpolion','comedy','javed'));
echo '<table border="1">';
echo '<tr>
<th>movies</th>
<th>type</th>
<th>director</th>
</tr>';

foreach ($movies as $movie)
{
    echo '<tr>';
    foreach($movie as $key)
    {
        echo'<td>' .$key.'</td>';
    }
    echo'</tr>';
}
echo'</table>';
?>
