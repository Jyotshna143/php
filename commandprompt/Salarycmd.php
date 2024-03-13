<?php
echo "\n________________________\n";
echo"        Chetu.inc         ";
echo"\n__________________________\n";
echo"\n Salary Slit For 2024 Jan \n";
echo"\n__________________________\n";
$name=readline("Name:");
$desg=readline("Designation:");
$sal=readline("Salary:");
echo"\n__________________________\n";
$Cl=readline("Cl=");
if($Cl>=3)
{
    $penalty=($Cl-3)*200;
    echo"penalty=".$penalty;
}
else{
    echo"No Tax";
}
$TDS=$sal*0.09;
echo"\nTDS=".$TDS;
$DA=$sal*0.12;
echo"\nDA =".$DA;
$TA=1200;
echo"\nTA=".$TA;
if($sal>=20000){
    $TAX=$sal*0.01;
    echo"\nTAX=".$TAX;
}
echo"\n__________________________\n";
echo"\nSalary=".$sal;

$Grosssal=$sal+$TDS+$DA+$TA;
echo"\nGross Salary=".$Grosssal;

$NetSal=$Grosssal-$TAX-$penalty;

echo"\n Net Salary=".$NetSal;
echo"\n__________________________\n";
?>