<?php
echo "include file";
include 'DB.php';

$db = new DB();

try {
    $arr = $db->getData();
} catch(PDOException $ex) {
    echo "An Error occured!"."<br />";
    echo $ex->getMessage();
}