<html>
<head>
    <title>Вставка данных в БД</title>
</head>
<body>
<?php

// Соединение с сервером БД
mysql_connect("mysql.myhost.com", "user", "sesame") or die (mysql_error ());

// Выбор БД
mysql_select_db("mydatabase") or die(mysql_error());

// Построение SQL-оператора

$strSQL = "INSERT INTO people(";

$strSQL = $strSQL . "FirstName, ";
$strSQL = $strSQL . "LastName, ";

$strSQL = $strSQL . "Phone, ";
$strSQL = $strSQL . "BirthDate) ";

$strSQL = $strSQL . "VALUES(";

$strSQL = $strSQL . "'Gus', ";

$strSQL = $strSQL . "'Goose', ";
$strSQL = $strSQL . "'99887766', ";

$strSQL = $strSQL . "'1964-04-20')";

// SQL-оператор выполняется
mysql_query($strSQL) or die (mysql_error());

// Закрытие соединения
mysql_close();
?>

<h1>БД обновлена!</h1>
</body>
</html>