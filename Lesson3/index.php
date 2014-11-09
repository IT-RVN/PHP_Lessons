<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Login</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<section class="loginform cf">
    <form name="login" action="handler.php" method="post">
        <ul>
            <li>
                <label for="login">Login</label>
                <input type="text" name="login" placeholder="your login" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" required></li>
            <li>
                <input type="submit" value="Login">
            </li>
        </ul>
        <a href="registry.php">Регистрация</a>
    </form>
</section>
</body>
</html>
<?php
header('Content-Type: text/html; charset=utf-8');
