<?php
include_once 'dbConn.php';

$id = $_GET['id']; 

$sql = "DELETE FROM menu WHERE id = '$id'";
$del = mysqli_query($connection,$sql); 

if($del){
    header("location: menu.php");
    mysqli_close($connection); 
}
else
{
    echo "Error deleting record"; 
}


?>