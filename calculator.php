<html>
    <head>
        <title>Calculation</title>
    </head>
    <body>
        <Form action="" method="request">
            <input type="text" placeholder="number1" name="num1"><br>
            <input type="text" placeholder="number2" name="num2"><br>
            <select name="cal">
            <option value="">Select</option>
                <option value="add">Addition</option>
                <option value="sub">Substration</option>
                <option value="mul">multiply</option>
                <option value="div">division</option>
                <option value="mod">modulo</option>
            </select>
            <input type=
            "Submit" name="sbt"><br>
        </Form>
    </body>
</html>
<?php
if(isset($_REQUEST['sbt'])){
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$cal=$_REQUEST['cal'];
if($cal=='add')
{
    echo $num1+$num2;
}
else if($cal=='sub')
{
    echo $num1-$num2;
}
elseif($cal=='mul')
{
    echo $num1*$num2;
}
elseif($cal=='div')
{
    echo $num1/$num2;
}
elseif($cal=='mod')
{
    echo $num1%$num2;
}

else{
    echo'none';
}
}
?>