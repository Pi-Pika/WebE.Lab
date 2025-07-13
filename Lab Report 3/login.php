<?php
include "dbcon.php";

$un = $_POST['Name'];
$pass = md5($_POST['Password']);

$query = "INSERT INTO users(username, password) values('$un', '$pass')";

$run = mysqli_query($conn, $query);

if($run) {
    echo "Connection successful";
} else {
    echo "Connection failed";
}
?>