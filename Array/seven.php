<html>
<body>
<?php

$v_company= array(
    'ABC'=>array('Kuching'=>array('Michael', 'Jenny'), 
                'Sibu'=>array('Sally', 'Muhammad', 'Mutu')
                ),
    'XYZ'=>array('Kuching'=>array('Lucy', 'Abdullah'), 
                'Sibu'=>array('John', 'Alicia')
    )
);
?>
<table border="1">

<tr><th>Company's Name</th>
    <th>Branch</th>
    <th>Staff's Name</th>
</tr>

<?php
foreach($v_company as $v_company_name=>$v_company_info){
    echo "<tr>";
    echo "<td>";
    echo "$v_company_name <br>";
    echo "</td>";
    echo "</tr>";

    foreach($v_company_info as $v_branch=>$v_staffs){

                echo "<td>";
                echo "$v_branch <br/>";
                echo "</td>";

        foreach($v_staffs as $v_staff){
                echo "<td>";
                echo "$v_staff <br/>";
                echo "</td>";
            echo "Company: ". $v_company_name. ",Branch: ". $v_branch. ",Staff: " .$v_staff . "<br>";
        }
    }   
}
?>
</table>
</body>
</html>