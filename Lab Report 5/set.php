<?php

    include 'dbcon.php';

    $id = $_POST['id'];
    $uname = $_POST['Name'];
    $post = $_POST['Password'];

    $query = "UPDATE users SET username='$uname', 
                password='$post' WHERE id='$id'";
    $run = mysqli_query($conn, $query);

    if(!$run){
        echo "submission failed!";
    } else{
        header("location: list.php");
    }

?>
