<?php
include 'dbcon.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $designation = $_POST['designation'] ?? '';
    $salary = $_POST['salary'] ?? '';
}

if ($name && $email && $mobile && $gender && $designation && $salary) {
    $sql = "INSERT INTO employees (name, email, mobile, gender, designation, salary)
    VALUES ('$name', '$email', '$mobile', '$gender', '$designation', '$salary')";

    $res = mysqli_query($conn, $sql);
    if($res) {
        echo "Employee added successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>