<?php
//find alphabet from word
$text="Jyotshnaswainsaswat";
$search_Char="s";
$count=0;
for($x="0";$x<strlen($text);$x++)
{
    if(substr($text,$x,1)==$search_Char)
    {
        $count=$count+1;
    }
}
echo $count."<br>";
?>