<?php
include "./database.php";
if (empty($_POST["username"])) {
    die("Name is required");
}
if (strlen($_POST["password"]) < 8) {
    die("password must be atleast 8 characters log.");
}
$passwordhash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$passwd = mysqli_real_escape_string($connection, $passwordhash);
$user = mysqli_real_escape_string($connection, $_POST["username"]);

$sql = "SELECT * FROM users WHERE username = '$user'";
$result = mysqli_query($connection, $sql);
$userinfo = mysqli_fetch_assoc($result);
if($userinfo) {
    echo "Username already exists.";
    die;
}
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$passwd');";
mysqli_query($connection, $sql);
echo "Account created successfully.";
header("Location: ../index.php");
?>