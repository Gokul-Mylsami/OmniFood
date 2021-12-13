<?php
include 'connection.php';

$userEmail = $_POST['email'];
$userPassword = $_POST['pass'];
$userphone = $_POST['number'];
$encrypt = password_hash($userPassword, PASSWORD_DEFAULT);
$sql = "INSERT into userInformations values ('$userEmail','$encrypt','$userphone')";
$res = mysqli_query($conn, $sql);
if (mysqli_error($conn)) {
    echo mysqli_error($conn);
}