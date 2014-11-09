<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<section class="loginform cf">
<form id='register' action='?' method='post' accept-charset='UTF-8'>
    <fieldset >
        <legend>Register</legend>

        <label for='name' >Your Full Name*: </label>
        <input type='text' name='name' id='name' maxlength="50" />

        <label for='login' >Login*:</label>
        <input type='text' name='login' id='login' maxlength="50" />

        <label for='password' >Password*:</label>
        <input type='password' name='password' id='password' maxlength="50" />

        <input type='submit' name='Submit' value='Submit' />
    </fieldset>
</form>
</section>
</body>
</html>
<?php
header('Content-Type: text/html; charset=utf-8');
$userName = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
if(strlen($userName) > 0 && strlen($login) > 0 && strlen($password) > 0)
{
    include_once 'DB.php';

    $DB = new DB();
    $DB->registryNewUser($userName, $login, $password);

    $res = $DB->findUserInDB($login, $password);


    if(strlen($res) == 0)
    {
        echo "<div>";
        echo "<script type='text/javascript'>";
        echo "alert('User: $res not registry... Check all data in form')";
        echo "</script>";
        echo "</div>";
    }
    else
    {
        session_start();
        $_SESSION['user']=$res;
        header ('Location: main.php');
    }
}

