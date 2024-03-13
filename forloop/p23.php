<?php
//check palindrom or not
function ispalindrome($n){
    $copy=$n;
    $rev=0;
    for(; $n>0; $n=(int)($n/10))
    { 
        /*It will find the reverse of number.*/
        $rev=$rev*10+$n%10;
    }
    // Compare the reverse of number with the copy variable (original number)
    if($copy==$rev)
    {
        echo $copy.' is palindrome number';
    }
    else
    {
        echo $copy.' is not palindrome number';
    }
}
$n=121;
ispalindrome($n);
?>