<?php
include 'connection.php';

$userEmail = $_POST['email'];
$userPassword = $_POST['pass'];
$sql = "SELECT password FROM userInformations WHERE email='$userEmail';";
$res = mysqli_fetch_row(mysqli_query($conn, $sql));
if (mysqli_error($conn)) {
    echo "login failed";
}

if (password_verify($userPassword, $res[0])) {
    echo "connection";
?>
<script>
alert("logined successfully");
</script>
<?php
    sleep(3);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}