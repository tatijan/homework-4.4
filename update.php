<html>
<head>
    <title>Обновление данных в БД</title>

</head>
<body>

<?php
// Соединение с сервером БД
mysql_connect("mysql.myhost.com", "user", "sesame") or die (mysql_error ());

// Выбор БД
mysql_select_db("mydatabase") or die(mysql_error());

// Построение SQL-оператора
$strSQL = "Update people set ";
$strSQL = $strSQL . "FirstName= 'D.', ";
$strSQL = $strSQL . "Phone= '44444444' ";

$strSQL = $strSQL . "Where id = 22";

// SQL-оператор выполняется
mysql_query($strSQL);

// Закрыть соединение с БД
mysql_close();
?>

<h1>База обновлена!</h1>
</body>
</html>