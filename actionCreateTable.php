<?php
session_start();
require('admittance.php');
require('connect.php');
if (!empty($_POST['description'])) {
    $description = $_POST['description'];
    $str="";
    foreach (array_slice($_POST, 1) as $value) {
        if (!empty($value)) {
            $str .= "$value, ";
        }

    }
    $connect = 	'CREATE TABLE '. $description.' (
id int NOT NULL AUTO_INCREMENT, ';
    $connect .= $str;
    $connect .= 'PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;';
    $sth = $pdo->prepare("$connect");
    $sth->execute();
}
header("Location:tableList.php");
?>