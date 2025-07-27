<?php

    include 'connect.php';


    $id = $_GET['id'];

    $query = "SELECT * FROM feed WHERE id = '$id'";

    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <h1>MugMark</h1>
        </div>
        <div class="search">
            <form action="search.php" method="get">
                <input type="text" placeholder="search by name" size="30" name="info">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="links">
            <a href="index.html">Post</a>
            <a href="list.php">Feed</a>
        </div>
    </div>
    <form action="set.php" method="post" align="center" style="padding-top: 20px;">
        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <input type="text" name="uname" id="uname" value="<?= $row['username'] ?>">
        <br><br>
        <textarea name="post" id="post" cols="30" rows="10"><?= $row['posts'] ?></textarea>
        <br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>