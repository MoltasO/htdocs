<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("./resources/header.html") ?>
    <title>Sign up</title>
</head>
<body>
    <a href="login.php">Login</a>
    <a href="index.php">Index</a>
    <div class="centerContainer">
        <div id="loginForm">
            <h1 class="pageTitle">Sign up</h1>
            <form method="post" action="signupscript.php">
                <label>Username</label>
                <input type="text" name="username" maxlength="20"><br>
                <label>Password</label>
                <input type="password" name="password"><br>
                <input type="submit" name="signup" value="Sign up" id="loginButton">
            </form>
        </div>
    </div>
</body>
</html>