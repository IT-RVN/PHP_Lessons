<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Login</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<div>
<?php
    session_start();
    echo "<h1>Welcome: ".$_SESSION['user']."</h1>";
?>
</div>
</body>
</html>

