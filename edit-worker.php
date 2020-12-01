<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
      <link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   
   <body>
   <img src="papayelogo.png" alt="papayelogo" class="logo-top">
      <?php
      include "dbConn.php";
      if(isset($_POST['update'])){
      $first_name = $_POST['firstName'];
      $last_name = $_POST['lastName'];
	   $email = $_POST['email'];
      $p_number = $_POST['number'];
      $dob = $_POST['dob'];
            
            $sql = "UPDATE staff 
               WHERE id = $id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $connection );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($connection);
         }else {
            ?>
    <div class="form">
        <form class="add-employee" method="POST" action="addworker.php">
            <h3>Edit Employee Details:</h3>
            <label for="ID">Employee ID: </label>
            <input type="number" id = "emp_id" placeholder="Employee ID">

            <label for="first">First Name: </label>
            <input type="text" id="firstName" name="firstName" placeholder="First Name">

            <label for="last">Last Name: </label>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name">

            <label for="mail">Email: </label>
            <input type="email" id="email" name="email" placeholder="E-mail">

            <label for="number">Phone Number: </label>
            <input type="number" id="number" name="number" placeholder="Phone Number">

            <label for="birthday">Date of Birth: </label>
            <input type="date" id="dob" name="dob" placeholder="yyyy-mm-dd">

            <button class="submit-btn" name="update"> Update Employee </button>
        </form>
    </div>
            <?php
         }
      ?>
      
   </body>
</html>