<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            padding: 10px;
        }
        table, tr, th, td {
            border: 1px solid #bebebe;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        div {
            display: inline-block;
            vertical-align: top;
            margin-right: 50px;
        }
        table, .text, .f {
            width: 400px;
        }
        .f2 {
            margin: 20px 0;
        }
    </style>
    <title>Создание таблицы</title>
</head>
<body>
<h2>!!!Таблицы  task и user не менять до проверки предыдущего домашнего задания!!!</h2>
<!-- выход -->
<form class="f2" action="exit.php" method="post" enctype="multipart/form-data">
    <input class="submit" type="submit" name="" value="Выйти">
</form>
<div>
    <!-- Добавление новой таблицы -->
    <form class="f f1" action="actionCreateTable.php" method="post" enctype="multipart/form-data">
        <table>

            <tr><td><input class="input text" type="text" name="description" placeholder="Название таблицы"></td></tr>
            <tr>
                <th>название поля, тип, длина/значения</th>
            </tr>

            <tr>
                <td><input class="input text" type="text" name="data1" placeholder="в формате: name VARCHAR (30) NOT NULL"></td>
            </tr>
            <tr>
                <td><input class="input text" type="text" name="data2" placeholder="или: estimation FLOAT NOT NULL"></td>
            </tr>
            <tr>
                <td><input class="input text" type="text" name="data3" placeholder="или: estimation DOUBLE NOT NULL DEFAULT '0.00'"></td>
            </tr>
            <tr>
                <td><input class="input text" type="text" name="data4" placeholder="в формате: name VARCHAR (30) NOT NULL"></td>
            </tr>
            <tr>
                <td><input class="input text" type="text" name="data5" placeholder="в формате: name VARCHAR (30) NOT NULL"></td>
            </tr>

        </table>
        <input class="submit f2" type="submit" name="" value="Добавить">
    </form>
</div>
<div>
    <!-- Выводим список таблиц -->
    <?php
    require('connect.php');
    $sth = $pdo->prepare("SHOW TABLES");
    $sth->execute();
    $sth = $sth->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table>
        <tr><td>Список таблиц</td><td>Просмотр</td></tr>
        <?php

        for ($i=0; $i < count($sth); $i++) {
            ?>
            <tr><td>
                    <?php echo $sth[$i]['Tables_in_new PDO'] ?></td>
                <td><form action="view.php" method="post" enctype="multipart/form-data">
                        <input type="submit" name="<?= $sth[$i]['Tables_in_new PDO'] ?>" value="посмотреть">
                    </form>
                </td></tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>