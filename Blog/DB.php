<?php
header('Content-Type: text/html; charset=utf-8');

class DB {
    private $dbh;
    private $salt;
    function  __construct()
    {
        include 'dbconnection.php';
        try {
            $this->dbh = new PDO("mysql:host={$connection['host']};dbname={$connection['dbname']};charset=utf8", "{$connection['adminDB']}", "{$connection['passw']}");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->salt = $connection['pass_salt'];
            $this->dbh->query("SET NAMES UTF8;");
        }
        catch (PDOException $ex)
        {
            echo "ERROR: ".$ex->getMessage();
            file_put_contents('PDOErrors.txt', $ex->getMessage(), FILE_APPEND);
        }
    }
    function getDataAllData() {
        $result=array();
        try {
            $STH = $this->dbh->query("SELECT * FROM user");
            $result = $STH->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex)
        {
            echo "ERROR: ".$ex->getMessage();
            file_put_contents('PDOErrors.txt', $ex->getMessage(), FILE_APPEND);
        }
        return $result;
    }

    function findUserInDB($login, $password)
    {
        try {
            $STH = $this->dbh->prepare("SELECT * FROM `user` WHERE Login = ? AND Password = ?");
            $STH->execute([$login, $this->hashPass($password)]);

            if ($STH->rowCount() > 0)
            {
                $arr = $STH->fetch(PDO::FETCH_ASSOC);
//                echo "User = ".$result['User'];
                $result = $arr['User'];
            }
            else
            {
                $result = "";
            }
        }
        catch (PDOException $ex)
        {
            echo "ERROR: ".$ex->getMessage();
            file_put_contents('PDOErrors.txt', $ex->getMessage(), FILE_APPEND);
        }
        return $result;
    }

    function registryNewUser($user, $login, $pass)
    {
        $data = array($user, $login, $this->hashPass($pass));
        try {
            $STH = $this->dbh->prepare("INSERT INTO user(`User`, `Login`, `Password`) VALUES (?, ?, ?)");
            $STH->execute($data);
        }
        catch (PDOException $ex)
        {
            echo "ERROR: ".$ex->getMessage();
            file_put_contents('PDOErrors.txt', $ex->getMessage(), FILE_APPEND);
        }
    }

    function hashPass($pass)
    {
        $res = hash_hmac('sha512', $pass, $this->salt);
        return $res;
    }

}