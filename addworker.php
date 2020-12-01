<?php
include 'dbConn.php';
if(isset($_POST['save']))
{	 
	$first_name = $_POST['firstName'];
	$last_name = $_POST['lastName'];
	$email = $_POST['email'];
    $p_number = $_POST['number'];
    $dob = $_POST['dob'];
	$sql = "INSERT INTO staff (firstName,lastName,p_number,dob,email)
	VALUES ('$first_name','$last_name','$p_number','$dob', '$email')";
	if (mysqli_query($connection, $sql)) {
	   echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
}

?>