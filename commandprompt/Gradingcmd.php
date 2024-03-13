 <?php
        $s1=readline("Hindi");
        $s2=readline("English");
        $s3=readline("Odia");
        $s4=readline("Computer");
        $s5=readline("Science");

$count=0;
if ($count<=0)
{
    if($s1==32 or $s1==31){$s1=33;$count++;}
}
if ($count<=0)
{
    if($s2==32 or $s2==31){$s2=33;$count++;}
}
if ($count<=0)
{
    if($s3==32 or $s3==31){$s3=33;$count++;}
}
if ($count<=0)
{
    if($s4==32 or $s4==31){$s4=33;$count++;}
}
if ($count<=0)
{
    if($s5==32 or $s5==31){$s5=33;$count++;}
}

$total=$s1+$s2+$s3+$s4+$s5;
$per=$total/5;
echo"total".$total."percentage".$per;
if($per>=80)
{
    echo"Grade A";
}
elseif($per>=60)
{
    echo"Grade B";
}
elseif($per>45)
{
    echo"Grade C";
}
else{
    echo"grade F";
}

if($s1<33 or $s2<33 or $s3<33 or $s4<33 or $s5<33)
{
    echo"Status fail";
}
else{
    echo"status pass";
}
        ?>
    