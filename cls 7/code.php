<?php

    include 'connect.php';

    $uname = $_POST['uname'];
    $post = $_POST['post'];

    $query = "INSERT INTO users(username, posts)
                VALUES('$uname', '$post')";
    $run = mysqli_query($con,$query);

    if(!$run){
        echo "Submission Failed";
    }else{
        header("Location: list.php");
    }
?>