<?php
include "dbcon.php";

$un = $_POST['un'];
$pass = md5($_POST['pass']);

$query = "INSERT INTO users(username, password) values('$un', '$pass')";

$run = mysqli_query($conn, $query);

if($run) {
    echo "Connection successful";
} else {
    echo "Connection failed";
}
?>