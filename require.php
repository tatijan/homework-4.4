<html>
<head>
    <title>Запрос данных из таблицы</title>
</head>
<body>

<?php
// Соединиться с сервером БД
mysql_connect("mysql.myhost.com", "user", "sesame") or die (mysql_error ());

// Выбрать БД
mysql_select_db("mydatabase") or die(mysql_error());

// SQL-запрос
$strSQL = "SELECT * FROM people";

// Выполнить запрос (набор данных $rs содержит результат)
$rs = mysql_query($strSQL);

// Цикл по recordset $rs
// Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array
while($row = mysql_fetch_array($rs)) {

    // Записать значение столбца FirstName (который является теперь массивом $row)
    echo $row['FirstName'] . "<br />";

}

// Закрыть соединение с БД
mysql_close();
?>
</body>
</html>