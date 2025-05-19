<?php
include "./database.php";
if(empty($_POST["username"]) || empty($_POST["password"])){
    die("Username and password can not be empty.");
    #$_SESSION["password"]
    #$_SESSION["username"] = $_POST["username"];
}
$user = mysqli_real_escape_string($connection, $_POST["username"]);
$sql = "SELECT * FROM users WHERE username = '$user'";
$result = mysqli_query($connection, $sql);
$userinfo = mysqli_fetch_assoc($result);
if($userinfo) {
    if(password_verify($_POST["password"], $userinfo["password"])){
        session_start();
        $_SESSION["username"] = $userinfo["username"];
        $_SESSION["password"] = $userinfo["password"];
        header("Location: ../index.php");
    } else {
        echo "Invalid login";
        die;
    }
}
exit;
?>
