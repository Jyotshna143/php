<?php
//associative array
$array=[['name'=>'abhishek','address'=>'Noida','mobile'=>23455],
       ['name'=>'Somesh','address'=>'bbsr','mobile'=>2345995],
       ['name'=>'Jyotshna','address'=>'patna','mobile'=>2340055]];

//echo $array[2]['address'];

// foreach($array as $nested)
// {
//     foreach ($nested as $key => $value)
//     {
//         echo $key .'='.$value ."<br>";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <table  border="1px black" >
        <tr>
            <th> Name</th>
            <th> Address</th>
            <th> Mobile </th> 

        </tr>
        <?php foreach($array as $index=> $nested){?>
        <tr>
        <?php foreach ($nested as $value) {?>
        <td>
         <?php echo $value;?> </td>
        <?php }}?>

        
    </table>
    
</body>
</html>

