<?php
    include "connect.php";

    $id = $_GET['id'];

    $query = "DELETE FROM employee 
                WHERE id = '$id'";
    
    $run = mysqli_query($con, $query);

    if($run) {
        header("Location: ListEmployee.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
?>
