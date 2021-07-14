<?php

include("../db/dbconn.php");

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from tblemp where id = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("location:admin_feature.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>