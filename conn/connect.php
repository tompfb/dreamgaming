<?php
// $servername = "localhost";
// $username = "u1fy4sikdv6qq";
// $password = "dreamgaming-789.com";
// $database = "db08clz12cheeg";

$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}

