<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="papayelogo.png" alt="papayelogo" class="logo-top">
        <div class="navi-menu">
            <nav>
                <ul class="nav">
                <a class = "current" href = "dashboard.html" style="margin: 0 0 0 10px ;">Dashboard</a>
                <a href = "orders.php" style="margin: 0 0 0 10px ;">Orders</a>
                <a href = "menu.php" style="margin: 0 0 0 10px ;">Menu</a>
                <a href = "workers.php" style="margin: 0 0 0 10px ;">Employees</a>
                <a href="logout.php" style="margin: 0 0 0 10px ;">Log Out</a>
                </ul>
            </nav>
        </div>
    </header>
    <?php
    include 'dbConn.php';
    $sql_staff = "SELECT * from staff";
    $number = mysqli_query($connection, $sql_staff);
    $total_staff = mysqli_num_rows($number);
    ?>
    <div class="employees">
        <h3>Number of Employees:</h3>
        <p><?php echo $total_staff ?></p>
        <a href="workers.php">Manage Employees</a>
    </div>
    <br>
    <hr>
    <br>
    <div class="menu">
        <h2>Current Menu:</h2>
        <?php

        include "dbConn.php";
        $records = mysqli_query($connection, "SELECT * FROM menu");

        while($data = mysqli_fetch_array($records))
        {
        ?>

            <tr>
                <td><?php echo $data['food_name']; ?></td><br>
                
            </tr>
        <?php
        }
        ?>
        </table>
        <br>
        <a href="menu.php">Edit Current Menu</a>
    </div>
    <br>
    <hr>
    <br>
    <div class="orders">
        <h2>Total Orders Today:</h2>
        <a href="orders.php">Manage Orders</a>
    </div>

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