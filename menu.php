<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
                <a class = "current" href = "menu.php" style="margin: 0 0 0 10px ;">Menu</a>
                <a href = "workers.php" style="margin: 0 0 0 10px ;">Employees</a>
                <a href="logout.php" style="margin: 0 0 0 10px ;">Log Out</a>
                </ul>
            </nav>
        </div>
    </header>
    <div class="form">
        <form method="POST" action="addmenu.php">
            <h3>Add to Menu</h3>
            <label for="first">Food Name: </label>
            <input type="text" id="foodName" name="foodName" placeholder="Food Name">

            <label for="last">Price: </label>
            <input type="number" id="foodPrice" name="foodPrice" placeholder="Price">

            <button class="submit-menu" name="save-menu"> Add Menu Item </button>
        </form>
    </div>

    <div class="remove-employee">
        <table border="2">
            <h3>Manage Menu</h3>
            <tr>
                <td>ID Number</td>
                <td>Food Name</td>
                <td>Price</td>
                <td>Delete</td>
                <td>Update</td>
            </tr>


        <?php

        include "dbConn.php";
        $records = mysqli_query($connection, "SELECT * FROM menu");

        while($data = mysqli_fetch_array($records))
        {
        ?>

            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['food_name']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><a href="deletemenu.php?id=<?php echo $data['id']; ?>">Delete</a></td>
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