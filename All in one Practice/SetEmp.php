<?php
    include "connect.php";

    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];

    $query = "UPDATE employee
            SET uname = '$uname',
                email = '$email',
                designation = '$designation',
                salary = '$salary'
            WHERE id = '$id'";

    $run = mysqli_query($con, $query);

    if($run) {
        header("Location: ListEmployee.php");
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
?>