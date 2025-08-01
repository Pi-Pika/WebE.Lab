<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "lab_eval_practice";
    
    global $conn;
    $conn = mysqli_connect($host, $user, $password, $database);

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // } else {
    //     die("Connected successfully");
    // }
?>