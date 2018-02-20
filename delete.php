<html>
<head>
    <title>Удаление данных из БД</title>
</head>

<body>

<?php
// Соединение с сервером БД
mysql_connect("mysql.myhost.com", "user", "sesame") or die (mysql_error ());

// Выбор Бд
mysql_select_db("mydatabase") or die(mysql_error());

// SQL-оператор, удаляющий запись
$strSQL = "DELETE FROM people WHERE id = 24";
mysql_query($strSQL);

// Закрыть соединение с БД
mysql_close();
?>

<h1>Запись удалена!</h1>

</body>
</html>
