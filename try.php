<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         include 'dbConn.php';
         if(isset($_POST['update'])) {
            
            $emp_id = $_POST['staff_id'];
            $emp_salary = $_POST['firstName'];
            
            $sql = "UPDATE staff ". "SET fname = $emp_salary ". 
               "WHERE id = $emp_id" ;
            $retval = mysqli_query($connection, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($connection);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "staff_id" type = "text" 
                           id = "emp_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Employee First Name</td>
                        <td><input name = "firstName" type = "text" 
                           id = "emp_salary"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>