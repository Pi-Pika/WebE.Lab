<?php

    include 'dbcon.php';

    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id = '$id'";
    $run = mysqli_query($conn, $query);
    if(!$run){
        echo ("Delete Operation Failed");
    }else{
        header("location: list.php");
    }

?>