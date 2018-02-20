<html>
<head>
    <title>Запросить данные из БД</title>
</head>
<body>

<dl>

    <?php
    // Соединиться с сервером БД
    mysql_connect("mysql.myhost.com", "user", "sesame") or die (mysql_error ());

    // Выбрать БД
    mysql_select_db("mydatabase") or die(mysql_error());

    // Получить данные из БД, в зависимости от значения id в URL
    $strSQL = "SELECT * FROM people WHERE id=" . $_GET["id"];
    $rs = mysql_query($strSQL);

    // Цикл по $rs
    while($row = mysql_fetch_array($rs)) {

        // Записать данные человека
        echo "<dt>Name:</dt><dd>" . $row["FirstName"] . " " . $row["LastName"] . "</dd>";
        echo "<dt>Phone:</dt><dd>" . $row["Phone"] . "</dd>";
        echo "<dt>Birthdate:</dt><dd>" . $row["BirthDate"] . "</dd>";

    }

    // Закрыть соединение с БД
    mysql_close();
    ?>

</dl>
<p><a href="list.php">Return to the list</a></p>

</body>

</html>
