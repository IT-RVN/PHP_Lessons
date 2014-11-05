<?php
/**
 * Created by PhpStorm.
 * User: ADVIRUS
 * Date: 02.11.2014
 * Time: 15:45
 */
include_once "DBconnection.php";

class DB {
    private $db;
    function  __construct()
    {
        $this->db =  new PDO("mysql:host={$connection['host']};dbname={$connection['dbname']};charset=utf8", "{$connection['adminDB']}", "{$connection['passw']}");
        echo "obj created<br>";
    }
    function getData() {
        $stmt = $this->db->query("SELECT * FROM user");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
        foreach($result as $row) {
            echo $row['id'].' '.$row['user'].' '.$row['login'].' '.$row['password'];
        }
    }
}