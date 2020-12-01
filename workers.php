<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="papayelogo.png" alt="papayelogo" class="logo-top">
        <div class="navi-menu">
            <nav>
                <ul class="nav">
                <a href = "dashboard.php" style="margin: 0 0 0 10px ;">Dashboard</a>
                <a href = "orders.php" style="margin: 0 0 0 10px ;">Orders</a>
                <a href = "menu.php" style="margin: 0 0 0 10px ;">Menu</a>
                <a class = "current" href = "workers.php" style="margin: 0 0 0 10px ;">Employees</a>
                <a href="logout.php" style="margin: 0 0 0 10px ;">Log Out</a>
                </ul>
            </nav>
        </div>
    </header>
    
    <div>
        <form class="form" method="POST" action="addworker.php">
            <h3>Add Employee :</h3>
            <label for="first">First Name: </label>
            <input type="text" id="firstName" name="firstName" placeholder="First Name">

            <label for="last">Last Name: </label>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name">

            <label for="mail">Email: </label>
            <input type="email" id="email" name="email" placeholder="E-mail">

            <label for="number">Phone Number: </label>
            <input type="tel" id="number" name="number" placeholder="123-456-7890">

            <label for="birthday">Date of Birth: </label>
            <input type="date" id="dob" name="dob" placeholder="yyyy-mm-dd">

            <button class="submit-btn" name="save"> Add Employee </button>
        </form>
    </div>
    <br>
    <br>
    <div class="remove-employee">
        <table border="2">
            <h3>Manage Employees</h3>
            <tr>
                <td>ID Number</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Delete</td>
                <td>Update</td>
            </tr>
        <?php

        include "dbConn.php";
        $records = mysqli_query($connection, "SELECT * FROM staff");

        while($data = mysqli_fetch_array($records))
        {
        ?>

            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['firstName']; ?></td>
                <td><?php echo $data['lastName']; ?></td>
                <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
                <td><a href="edit-worker.php?userid=<?php echo $data['id']; ?>">Update</a></td>
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
    <br>
    <br>

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