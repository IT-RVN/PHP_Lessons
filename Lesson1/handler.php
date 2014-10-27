<?php
session_start();
$user=$_POST["login"];
echo "<h1>Welcome $user</h1>";
if (!isset($_SESSION['counter']))
    $_SESSION['counter']=0;
echo "Вы обновили эту страницу ".$_SESSION['counter']." раз. ";
echo "<p><a href='javascript:history.back(-1);'>Back</a></p>";
