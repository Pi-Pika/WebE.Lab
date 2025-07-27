<?php

    include 'dbcon.php';

    $info = $_GET['info'];

    $query = "SELECT * FROM users WHERE username LIKE '%$info%' OR password LIKE '%$info%'";

    $run = mysqli_query($conn, $query);

    if(mysqli_num_rows($run)>0){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Cards</title>
    <link rel="stylesheet" href="liststyle.css">
    <link rel="stylesheet" href="style3.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .user-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .user-card {
            background-color: #fff;
            padding: 20px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        .user-card h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .user-card p {
            margin: 0;
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 40px;

        }
        table, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <h1>Batman</h1>
        </div>
        <div class="search">
            <form action="search.php" method="get">
                <input type="text" placeholder="search" size="30" name="info" id="info">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="links">
            <a href="Register.html">login</a>
            <a href="list.php">Users</a>
        </div>
    </div>
    <br><br>
    <table align="center">
        <tr>
            <th>Username</th>
            <th>Passwords</th>
            <th>Actions</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($run)){ ?>
        <tr>
            <td><?=$row['username'] ?></td>
            <td><?=$row['password'] ?></td>
            <td>
                <a href="update.php?id=<?=$row['id']?>">Update</a>
                <a href="delete.php?id=<?=$row['id']?>" onClick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>   
    </table>
    <br><br>
    <h1>User List</h1>
    <div class="user-container">
        <?php
            include "dbcon.php";

            $query = "SELECT * FROM users";
            $run = mysqli_query($conn, $query);

            if(mysqli_num_rows($run) > 0) {
                while($row = mysqli_fetch_assoc($run)) {
                    echo '<div class="user-card">';
                    echo '<h1>' . $row['username'] . '</h1>';
                    echo '<p>Password: ' . $row['password'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No users found.</p>";
            }
        ?>
    </div>
    <div class="footer">
        © All right reserved.
    </div>
    <?php } ?> 

</body>
</html>
