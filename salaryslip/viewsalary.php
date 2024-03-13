<?php
$name=$_REQUEST['name'];
$desg=$_REQUEST['desg'];
$sal=$_REQUEST['sal'];
$cleave=$_REQUEST['cleave'];

?>

<html>
    <head>
        <style>
           
h1,h3{
            text-align:center;
            color: darkblue;
        }
        table ,th,td {
            border: 1px solid;
            border-collapse: collapse;
            margin-left:auto;
            margin-right:auto;
           width: 50%;
           background-color: yellowgreen;
       
           
         }

     th,td {
    padding: 15px;
  height: 20px;
  text-align:center;
}
        </style>
    </head>
    <body>
        <h1>Chetu.inc</h1>
        <table>
            <h3>Salary Slit For 2024 Feb 16</h3>  
            <tr>
                <th>Name</th>
                <td><?php echo $name ?></td>
            </tr>


            <tr>
                <th>Designation</th>
                <td><?php echo $desg ?></td>
            </tr>



            <tr>
                <th>Salary</th>
                <td><?php echo $sal ?></td>
            </tr>

            <tr>
                <th>Casual Leave</th>
                <td><?php echo $cleave ?></td>
            </tr>

            <tr>
                <th>Penalty</th>
                <td><?php 
                if($cleave>=3){
                    $penalty=($cleave-3)*200;
                    echo $penalty;
                }
                ?></td>
            </tr>

            <tr>
                <th>TDS</th>
                <td><?php $TDS=$sal*0.09;
                echo $TDS; ?></td>
            </tr>


            <tr>
                <th>DA</th>
                <td><?php $DA=$sal*0.12;
                echo $DA; ?></td>
            </tr>

            <tr>
                <th>TA</th>
                <td><?php $TA=1200;
                echo $TA; ?></td>
            </tr>

            <tr>
                <th>TAX</th>
                <td><?php
                if($sal>=20000) {
                    $TAX=$sal*0.01;
                    echo $TAX;
                }else{
                    echo "NO Tax";
                }
                ?></td>
            </tr>

            <tr>
                <th> Gross Salary</th>
                <td><?php  $Grosssal=$sal+$TDS+$DA+$TA;
                echo $Grosssal; ?></td>
            </tr>

            <tr>
                <th>Net Salary</th>
                <td><?php $Netsal=$Grosssal-$TAX-$penalty;
                echo $Netsal; ?></td>
            </tr>

        </table>
    </body>
</html>