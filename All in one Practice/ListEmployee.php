<?php
    include "connect.php";

    $query = "SELECT * FROM employee";
    $run = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <h2>Employee Management</h2>
        </div>
        <div class="search">
            <form method="get" action="search.php">
                <input type="text" name="info" id="info" placeholder="Search">
                <input type="submit" value="search">
            </form>
        </div>
        <div class="links">
            <a href="index.html">Add Employee</a>
            <a href="ListEmployee.php">List Employee</a>
        </div>
    </div>

    <br><br>

    <div class="container" align="center">
        <h2>Employee List</h2>
        <?php if(mysqli_num_rows($run) > 0) { ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($run)) { ?>
            <tr>
                <td> <?= htmlspecialchars($row['uname']) ?> </td>
                <td> <?= htmlspecialchars($row['email']) ?> </td>
                <td> <?= htmlspecialchars($row['mobile']) ?> </td>
                <td> <?= htmlspecialchars($row['gender']) ?> </td>
                <td> <?= htmlspecialchars($row['designation']) ?> </td>
                <td> <?= htmlspecialchars($row['salary']) ?> </td>
                <td>
                    <a href="update.php?id=<?= urlencode($row['id']) ?>">Update</a>
                    <a href="delete.php?id=<?= urlencode($row['id']) ?>" onClick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php } else { ?>
            <div class="Ndata">
                <h2>No Data in the table</h2>
            </div>
        <?php } ?>
    </div>
</body>
</html>