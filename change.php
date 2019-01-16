<?php
session_start();
require('admittance.php');
require('connect.php');
$strTable = $_POST['Table'];
$strField = $_POST['Field'];
$strType = $_POST['Type'];
if (isset($_POST['Field2'])) {
    $strField2 = $_POST['Field2'];
    $change = 'ALTER TABLE '.$strTable.' CHANGE '.$strField.' '.$strField2.' '.$strType.';';
}
if (isset($_POST['Type2'])) {
    $strType2 = $_POST['Type2'];
    $change = 'ALTER TABLE '.$strTable.' MODIFY '.$strField.' '.$strType2.';';
}
$change = $pdo->prepare("$change");
$change->execute();
header("Location:tableList.php");
?>