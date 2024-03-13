<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='post'>
<input type='text' name='name' placeholder='Name'><br>
<input type='number' name='age' placeholder='Age'><br>
<input type='number' name='mobile' placeholder='Mobile'><br>
<input type='text' name='add' placeholder='Address'><br>
<input type='submit' name='sbt'><br>
</form>
</body>
</html>       
<?php
include 'connection.php';
if(isset($_POST['sbt']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $address=$_POST['add'];
    $query="insert into collage( name,age,mobile,address)values('$name','$age','$mobile','$address')";
    $data=mysqli_query($conn,$query);
    if(isset($data)){
        header('Location:view.php');
    }
    else{
        header('Location:register.php');
    }
}

