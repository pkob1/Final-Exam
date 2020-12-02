<?php

//database credentials
$servername='localhost';
$username='root';
$password='';
$dbname = "PKOB65062022";

//establish connection to database
$connection=mysqli_connect($servername,$username,$password,"$dbname");
if(!$connection){
   die('Could not Connect My Sql:' .mysql_error());
}

?>