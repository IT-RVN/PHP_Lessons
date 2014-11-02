<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
//for($i=0; $i<5; ++$i)
//{
//    echo ".";
//    //sleep(1);
//    usleep(1000000);
//}
$user=$_POST["login"];
if($user == 'Admin')
{
    echo "<div>Проверка успешная!!!</div>";
    if (!isset($_SESSION['counter']))
        $_SESSION['counter']=0;
    $_SESSION['counter']++;
    echo "<p><a href='open_site.php'>Входите $user ...</a></p>";
    if (!isset($_SESSION['user']))
        $_SESSION['user']=$user;
}
else
{
    echo "<div>Проверка неуспешная, пользователь $user не существует - возвращайтесь!!!</div>";
    echo "<p><a href='javascript:history.back(-1);'>Back</a></p>";
}

