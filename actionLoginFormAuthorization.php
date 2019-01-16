<?php
session_start();
if (empty($_POST['login']) || empty($_POST['password'])) {
    header("Location:index.php");
    exit;
}
require('connect.php');
$login = $_POST['login'];
$password = $_POST['password'];
$sth = $pdo->prepare("SELECT * from user WHERE login='$login' AND password='$password'");
$sth->execute();
$sth = $sth->fetchAll(PDO::FETCH_ASSOC);
if (!empty($sth)) {
    foreach ($sth as $value) {
        $_SESSION['user_id']=$value['id'];
        $_SESSION['login']=$value['login'];
        $_SESSION['password']=$value['password'];

    }
    header("Location:tableList.php");
} else {
    header("Location:index.php");
}
?>