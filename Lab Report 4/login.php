<?php
    include "dbcon.php";

    $un = $_POST['Name'];
    $pass = $_POST['Password'];

    $query = "INSERT INTO users(username, password) values('$un', '$pass')";

    $run = mysqli_query($conn, $query);

    if($run) {
        echo "Connection successful";
        header("Location: list.php");
    } else {
        
        echo "Connection failed";
}
?>
