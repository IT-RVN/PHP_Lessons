<?php
/**
 * Created by PhpStorm.
 * User: ADVIRUS
 * Date: 02.11.2014
 * Time: 15:45
 */

class DB {
    private $db;
    function  __construct()
    {
        $this->db =  new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '1');
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