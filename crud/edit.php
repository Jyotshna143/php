<?php
include 'connection.php';
$id=$_GET['id'];
$sql="select * from collage where id='$id'";
$result=mysqli_query($conn,$sql)
?>
<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<?php while($data=mysqli_fetch_assoc($result)){?>
    <input type='hidden' name='id' value="<?php echo $data['id'];?>"><br>
    <input type='text' name='name' placeholder='Name'value="<?php echo $data['name'];?>"><br>
    <input type='number' name='age' placeholder='Age'value="<?php echo $data['age'];?>"><br>
    <input type='number' name='mobile'placeholder='Mobile' value="<?php echo $mobile['mobile'];?>"><br>
    <input type='text' name='address'placeholder='Address' value="<?php echo $data['address'];?>"><br>   
     <input type='submit' name='sbt' value='update'><br>
<?php }?>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['sbt'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $sql="update collage set name='$name',age='$age',mobile='$mobile',address='$address' where id='$id'";
    $check=mysqli_query($conn,$sql);
    if(isset($check)){
        header('Location:view.php');
}
}
?>

