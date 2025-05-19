<?php
$host = "localhost";
$database = "userdatabase";
$username = "root";
$password = "";

$connection = mysqli_connect($host, $username, $password, $database);

if(!$connection) {
    echo "Error";
}
?>