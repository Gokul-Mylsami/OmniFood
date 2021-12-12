<?php
$host = 'b9eo15tkau8yyp8hdbg4-mysql.services.clever-cloud.com';
$dbname = 'b9eo15tkau8yyp8hdbg4';
$dbusername = 'uu92vcbdst3zdjtv';
$dbpass = 'EdvSFKXN1P5ZFcS1wuYE';
// $host = 'localhost';
// $dbname = 'ominifood';
// $dbusername = 'root';
// $dbpass = '';
$conn = mysqli_connect($host, $dbusername, $dbpass, $dbname);
if (mysqli_connect_error()) {
    die('connect error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}