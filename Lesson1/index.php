<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Login</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<section class="loginform cf">
    <form name="login" action="handler.php" method="post">
        <ul>
            <li>
                <label for="usermail">User</label>
                <input type="text" name="login" placeholder="your login" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" required></li>
            <li>
                <input type="submit" value="Login">
            </li>
        </ul>
    </form>
</section>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['counter']))
    $_SESSION['counter']=0;
$_SESSION['counter']++;

