<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cls 5";

    global $conn;
    $conn = mysqli_connect($host, $user, $password, $db);

    // if(!$conn) {
    //     echo "Connrection failed: ";
    // } else {
    //     echo "Connection successful";
    // }
?>