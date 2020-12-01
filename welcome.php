<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<img src="papayelogo.png" alt="papayelogo" class="logo-top">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome</h1>
    </div>
    <p>
        <a href="dashboard.php" class="btn btn-warning">Navigate to Dashboard</a>
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </p>

    <footer class="footer-whole">
        <div class="contact">
            <h3>Contact Us:</h3>
            <p>Telephone Number: (0302) 810 990 - 3</p>
            </div>
    
        <div class="papaye">
            <a href="https://twitter.com/papayefastfoods?lang=en" target="_blank"><img src="tweeter.png" alt="papayetwitter" id="logo-footer"></a>
            <a href="info@ papayegroup.com" target="_blank"><img src="gmail.png" alt="papayemail" id="logo-footer"></a>
        </div>
    
        <p style="text-align: center;">Copyright &copy; Papaye Group</p>
    </footer>
</body>
</html>