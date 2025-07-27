<?php

    include 'connect.php';

    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $post = $_POST['post'];

    $query = "UPDATE feed SET username='$uname', 
                posts='$post' WHERE id='$id'";
    $run = mysqli_query($con, $query);

    if(!$run){
        echo "submission failed!";
    } else{
        header("location: list.php");
    }

?>
