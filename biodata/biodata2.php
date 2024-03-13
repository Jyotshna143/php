<?php
$name=$_REQUEST['name'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];
$dob=$_REQUEST['dob'];
$dept=$_REQUEST['department'];

$address=$_REQUEST['address'];
$pincode=$_REQUEST['pincode'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* body{
          
text-align:center;
        } */
        h1{
            text-align:center;
        }
        table ,th,td {
            border: 1px solid;
            border-collapse: collapse;
            margin-left:auto;
            margin-right:auto;
           width: 50%;
           /* background-color:cyan; */
           background-color: #00bfff;
         }

     th,td {
    padding: 15px;
  height: 20px;
  text-align:center;
}
/* tr:hover {background-color: coral;} */
tr{
    width:50%;
}

    </style>
</head>
<body>
      <h1>View Biodata</h1>
    <table >
        

        <tr>
            <th>Name</th>
            <td><?php echo $name?></td>
        </tr>

        <tr>
        <th>Father's Name</th>
            <td><?php echo $fname?></td>
        </tr>

        <tr>
        <th>Mother's Name</th>
            <td><?php echo $mname?></td>

        </tr>

        <tr>
        <th>Email</th>
            <td><?php echo $email?></td>
        </tr>

        <tr>
        <th>Age</th>
            <td><?php echo $age ?></td>
        </tr>

        <tr>
        <th>Dob</th>
            <td><?php echo $dob ?></td>
        </tr>

        <tr>
        <th>Department</th>
            <td><?php echo $dept?></td>
     </tr>

      
        <tr>
        <th>Address</th>
            <td><?php echo $address?></td>
        </tr>
        <tr>
        <th>Pincode</th>
            <td><?php echo $pincode?></td>
</tr>

        
    </table>
</body>
</html>
