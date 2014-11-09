<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'DB.php';

$login = $_POST['login'];
$password = $_POST['password'];

$db = new DB();
$arr = $db->getDataAllData();

echo "<div>";

$res = $db->findUserInDB($login, $password);
if(strlen((string) $res) === 0)
{
    echo "<h5>Sorry. Login $login is not exists"."</h5>";
}
else
{
    session_start();
    $_SESSION['user']=$res;
    header ('Location: main.php');
}
echo "</div>";

