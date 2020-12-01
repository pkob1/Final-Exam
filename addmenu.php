<?php
include 'dbConn.php';
if(isset($_POST['save-menu']))
{	 
	$food_name = $_POST['foodName'];
	$food_price = $_POST['foodPrice'];
	$sql = "INSERT INTO menu (food_name, price)
	VALUES ('$food_name','$food_price')";
	if (mysqli_query($connection, $sql)) {
	   echo "New record created successfully !";
	   header("location: menu.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
}

?>