<?php
    include "connect.php";

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO employee(uname,email,mobile,gender,designation,salary)
              VALUES('$uname','$email','$mobile','$gender','$designation','$salary')";

    $run=mysqli_query($con, $query); 

    if($run) {
        header("location: ListEmployee.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
?>