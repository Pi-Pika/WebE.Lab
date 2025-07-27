<?php

    include 'connect.php';

    $uname = $_POST['uname'];
    $post = $_POST['post'];

    $query = "INSERT INTO feed(username, posts) 
                VALUES('$uname', '$post')";
    $run = mysqli_query($con, $query);

    if(!$run){
        echo "submission failed!";
    } else{
        header("location: list.php");
    }

?>
