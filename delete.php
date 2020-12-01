<?php

include "dbConn.php"; 

$id = $_GET['id']; 


$del = mysqli_query($connection,"delete from staff where id = '$id'"); 

if($del)
{
    mysqli_close($connection); 
}
else
{
    echo "Error deleting record"; 
}
?>