<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("./resources/header.html") ?>
    <title>Login</title>
</head>
<body>
    <?php if(isset($invalidLogin)) {
        echo "<p>Invalid login</p>";
    }?>
    <a href="index.php">Index</a>
    <a href="signup.php">Sign up</a>
    <div class="centerContainer">
        <div id="loginForm">
            <h1 class="pageTitle">Login</h1>
            <form method="post" action="loginscript.php">
                <label>Username</label>
                <input type="text" name="username" maxlength="20"><br>
                <label>Password</label>
                <input type="password" name="password"><br>
                <input type="submit" name="login" value="Login" id="loginButton">
            </form>
        </div>
    </div>
</body>
</html>
