<?php
/**
 * Created by PhpStorm.
 * User: ADVIRUS
 * Date: 28.10.2014
 * Time: 19:59
 */
session_start();
if (!isset($_SESSION['user']))
{
    $user = "Unknown";
}
else {
    $user = $_SESSION['user'];
    if(isset($_SESSION['counter']))
        $counter = $_SESSION['counter'];
    else
        $counter = 0;
}



echo "<h1>С возвращением $user</h1>";
echo "<div>Вы заходили сюда уже $counter раз!</div>";

echo "<p><a href='index.php'>Вернутся на начало</a></p>";