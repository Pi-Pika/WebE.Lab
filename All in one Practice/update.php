<?php
    include "connect.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM employee WHERE id = '$id'";

    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table, th, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    
    <form action="SetEmp.php" method="post" align="center" >
        <fieldset>
            <legend>Add Employee</legend>
            <input type="hidden" name="id" value="<?= $id ?>">

            <label for="Name">Name:</label>
            <input type="text" name="uname" value="<?= $row['uname'] ?>"     required>
            <br><br>

            <label for="Email">Email:</label>
            <input type="email" name="email" value="<?= $row['email'] ?>" required>
            <br><br>

            <label for="Designation">Designation:</label>
            <input type="text" name="designation" value="<?= $row['designation'] ?>" id="designation" required>
            <br><br>

            <label for="Salary">Salary:</label>
            <input type="number" name="salary" value="<?= $row['salary'] ?>" id="salary" required>
            <br><br>

            <input type="submit" onclick="func()" value="Post">
        </fieldset>
    </form>


</body>
</html>