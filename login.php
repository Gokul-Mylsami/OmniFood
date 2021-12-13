<?php
include 'connection.php';

$userEmail = $_POST['email'];
$userPassword = $_POST['pass'];
$sql = "SELECT password FROM userInformations WHERE email='$userEmail';";
$res = mysqli_fetch_row(mysqli_query($conn, $sql));
if (mysqli_error($conn)) {
    echo mysqli_error($conn);
}

if (password_verify($userPassword, $res[0])) {
    echo "success";
}