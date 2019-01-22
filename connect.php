<?php
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'todo');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$connect_str = DB_DRIVER . ':host=' . DB_HOST . '; dbname=' . DB_NAME;
$pdo = new PDO($connect_str, DB_USER, DB_PASSWORD);
?>

