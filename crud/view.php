<?php
$conn=mysqli_connect('localhost','root','','people');
 $query='select * from collage';
 $result= mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0) 
 {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Dashbord</h1>
    <table border=3 class='table'>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Mobile</th>
        <th>Address</th>
    </tr>
    <?php while ($data=mysqli_fetch_assoc($result))
    {?>
      <tr>
        <td>
            <?php echo $data['id'];?>
        </td>
        <td>
            <?php echo $data['name'];?>
        </td>
        <td>
            <?php echo $data['age'];?>
        </td>
        <td>
            <?php echo $data['mobile'];?>
        </td>
        <td>
            <?php echo $data['address'];?>
        </td>
        <td><a href='edit.php? id=<?php echo $data['id'];?>' class='btn btn-primary'>Edit</a>
     <a href='delete.php? id=<?php echo $data['id'];?>' class='btn btn-danger'>Delete</a></td>
      </tr>   
<?php }}
else{echo'No data found';}?>
</table>
</body>
</html>