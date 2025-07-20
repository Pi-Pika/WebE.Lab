<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table,th,td {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }k
    </style>
<body>
    
</body>
</html>

<?php

    include "dbcon.php";

    $query = "SELECT * FROM users";

    $run = mysqli_query($conn, $query);

    if(mysqli_num_rows($run) > 0) {
        echo "<table> 
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>";
        while($row = mysqli_fetch_assoc($run)) {
            echo "<tr>
                    <td>" . $row['username'] . "</td>
                    <td>" . $row['password'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
?>