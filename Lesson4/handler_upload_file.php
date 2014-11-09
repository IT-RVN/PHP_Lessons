<?php
header('Content-Type: text/html; charset=utf-8');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print_r ($_POST);
print_r($_FILES);

$uploadDir = __DIR__ . '/uploaded_files';
$success = false;

if (is_uploaded_file($_FILES['fileName']['tmp_name'])) {
    $success = move_uploaded_file($_FILES['fileName']['tmp_name'], 
            $uploadDir.'/'.$_FILES['fileName']['name']);
}

if ($success) {
    echo 'File copied';
}
 else {
    echo 'File not copied';
}
