<?php
if ($_SESSION['login']!=='XXXXX' || $_SESSION['password']!=='XXXXX') {
    header("Location:tableList.php");
    exit();
}
?>