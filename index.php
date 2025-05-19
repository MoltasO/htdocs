<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("./resources/header.html") ?>
        <title>Index</title>
    </head>
    <body>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign up</a>
        <h1>Username: "<?php
        if(isset($_SESSION["username"])){
            echo $_SESSION["username"];
        }
        ?>"</h1>
    </body>
</html>