<?php

    include 'connect.php';

    $query = "SELECT * FROM users";

    $run = mysqli_query($con, $query);

    if(mysqli_num_rows($run)>0){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
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
            <h1>MugMark</h1>
        </div>
        <div class="search">
            <input type="text" placeholder="search by name" size="30">
        </div>
        <div class="links">
            <a href="index.html">Post</a>
            <a href="list.php">Feed</a>
        </div>
    </div>
    <div class="table">
    <table>
        <tr>
            <th>Username</th>
            <th>Posts</th>
            <th>Actions</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($run)){ ?>
        <tr>
            <td><?= $row['username'] ?></td>
            <td><?= $row['posts'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id']?>">Update</a> |
                <a href="delete.php?id=<?= $row['id']?>">Delete</a>
            </td>
        </tr>
        <?php }?>
    </table>
    </div>
    <?php } ?>
</body>
</html>