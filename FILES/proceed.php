<?php
echo'<pre>';
print_r($_FILES);
echo'</pre>';

$name= $_FILES['img']['name'];
$temp_name= $_FILES['img']['tmp_name'];

$type=$_FILES['img']['type'];
// if($type=='image/png' or $type=='image/jpeg')
if($type>141659){
    move_uploaded_file($temp_name,'document_upload/' .$name);}
    else{
        echo'incorrect file type';
    }
?>