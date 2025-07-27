<?php

    include 'dbcon.php';


    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = '$id'";

    $run = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <form action="set.php" method="post" align="center" style="padding-top: 20px;">
        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <input type="text" name="Name" id="Name" value="<?= $row['username'] ?>">
        <br><br>
        <input type="text" name="Password" id="Password" value="<?= $row['password'] ?>">
        <br><br>
        <input type="submit" value="Change">
    </form>
</body>
</html>