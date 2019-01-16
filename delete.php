<?php
session_start();
require('admittance.php');
require('connect.php');
$strTable = $_POST['Table'];
$strColumn = $_POST['Field'];
$delete = 'ALTER TABLE '.$strTable.' DROP COLUMN '.$strColumn;
$delete = $pdo->prepare("$delete");
$delete->execute();
header("Location:tableList.php");
?>